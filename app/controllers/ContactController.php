<?php


namespace App\Controllers;


use App\Classes\CSRFToken;
use App\classes\Mail;
use App\Classes\Request;
use App\Classes\ValidateRequest;

class ContactController extends BaseController
{
  public function show()
  {

    return view('home/contact');
  }

  public function email()
  {
    if (Request::has('post')) {
      $request = Request::get('post');
      if (CSRFToken::verifyCSRFToken($request->token)) {
        $rules = [
          'name' => ['required' => true, 'maxLength' => 20, 'string' => true],
          'email' => ['required' => true, 'email' => true],
          'message' => ['required' => true, 'minLength' => 4, 'maxLength' => 1500, 'mixed' => true]
        ];

        $validate = new ValidateRequest;
        $validate->abide($_POST, $rules);

        if ($validate->hasError()) {
          $errors = $validate->getErrorMessages();
          Request::refresh();
          return view('home/contact', ['errors' => $errors]);
        }

        $mail = new Mail();
        $data = [
          'to' => 'jasoncharlesrogers@gmail.com',
          'name' => $request->name,
          'subject' => 'Contact from ATAZ',
          'body' => $request->message,
          'view' => 'welcome'

        ];

        if ($mail) {
          $mail->send($data);
        } else {
          echo ' error sending email';
        }
        Request::refresh();

        $this->thanks();
      }
    }
  }

  public function thanks()
  {
    return view('home/contact-thanks',
      ['success' => 'We have received your email! Thanks for contacting us!']);
  }
}
