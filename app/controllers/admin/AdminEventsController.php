<?php


namespace App\Controllers\Admin;

use App\Classes\CSRFToken;
use App\Classes\Request;
use App\Classes\ValidateRequest;
use App\Controllers\BaseController;
use App\Models\Training;

class AdminEventsController extends BaseController
{
  public function show()
  {

    return view('admin/admin-events');
  }

  public function add()
  {
    if (Request::has('post')) {
      $request = Request::get('post');
      if (CSRFToken::verifyCSRFToken($request->token)) {
        $rules = [
          'location' => ['required' => true],
          'event' => ['required' => true],
          'dates' => ['required' => true],
          'start' => ['required' => true, 'minLength' => 6, 'maxLength' => 50],
          'end' => ['required' => true]
        ];

        $validate = new ValidateRequest;
        $validate->abide($_POST, $rules);

        if ($validate->hasError()) {
          $errors = $validate->getErrorMessages();
          return view('admin/admin-events', ['errors' => $errors]);
        }

        //insert into database
        Training::create([
          'location' => $request->location,
          'event' => $request->event,
          'dates' => $request->dates,
          'start' => $request->startTime,
          'end' => $request->endTime,
          //'photo' => $request->photo,
          'description' => $request->description
        ]);

        Request::refresh();
        return view('admin/admin-events', ['success' => 'Event created!']);
      }
      throw new \Exception('Token Mismatch');
    }
    return null;
  }

  public function edit($id)
  {
    if (Request::has('post')) {
      $request = Request::get('post');
      if (CSRFToken::verifyCSRFToken($request->token)) {
        $rules = [
          'location' => ['required' => true],
          'event' => ['required' => true],
          'dates' => ['required' => true],
          'start' => ['required' => true, 'minLength' => 6, 'maxLength' => 50],
          'end' => ['required' => true]
        ];

        $validate = new ValidateRequest;
        $validate->abide($_POST, $rules);

        if ($validate->hasError()) {
          $errors = $validate->getErrorMessages();
          header('http/1.1 422 Unprocessable Entity', true, 422);
          echo json_encode($errors);
          exit;
        }

        Training::where('id', $id)->update([
          'location' => $request->location,
          'event' => $request->event,
          'dates' => $request->dates,
          'start' => $request->startTime,
          'end' => $request->endTime,
          //'photo' => $request->photo,
          'description' => $request->description
        ]);
        echo json_encode(['success' => 'Record updated successfully']);
        exit;
      }
      throw new \Exception('Token Mismatch');
    }
    return null;
  }
}
