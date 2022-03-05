        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required',
        ]);
        if ($validator->fails()) {
            $errors = array_map(function ($err) {
                return $err[0];
            }, $validator->errors()->toArray());
            $errors = implode(',', $errors);
            return response()->json(['status' => 'error', 'statusCode' => 200, 'data' => null, 'message' => $errors]);
        }
