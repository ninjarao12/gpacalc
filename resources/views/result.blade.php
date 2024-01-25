<!-- resources/views/gpa-results.blade.php -->

<html>
<head>
  <title>Student GPA Results</title>
</head>
 <style>
		body {
			background-color: #bbffc0;
			font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;;
		}
		.container {
			width: 500px;
			margin: 50px auto;
			background-color: #fff;
			padding: 20px;
			padding-bottom: 50px;
			border-radius: 10px;
			box-shadow: 0 0 10px rgba(0,0,0,0.2);
		}
		h1 {
			font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
			text-align: center;
			color: #333;
		}
		label {
			display: block;
			margin-bottom: 10px;
			color: #666;
		}
		input[type="text"], input[type="password"] {
			width: 96%;
			padding: 10px;
			border-radius: 5px;
			border: 1;
			margin-bottom: 20px;
		}
		input[type="submit"], input[type="button"] {
			background-color: #4CAF50;
			color: #fff;
			padding: 10px 20px;
			border-radius: 5px;
			border: none;
			cursor: pointer;
			float: left;
			margin-right: 10px;
		}

		input[type="submit"]:hover, input[type="button"]:hover {
			background-color: #3e8e41;
		}
		.logo {
			display: block;
			margin: 0 auto;
			width: 100px;
			height: 100px;
			background-image: url("1.jpg");
			background-size: contain;
			background-repeat: no-repeat;
			background-position: center;
			margin-bottom: 20px;
		}
		.signup-btn {
			background-color: #bbffc0;
			float: left;
			color: #333;
			font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
			margin-right: 10px;
			padding: 10px 20px;
			border-radius: 50px;
			border: none;
			cursor: pointer;
		}
		.signup-btn:hover {
			background-color: #006080;
		}
	</style>
<body>
  <div class="container">
    <h1>Student GPA Results</h1>
    <p><strong>Student Name:</strong> {{ $student_name }}</p>
    <table>
      <thead>
        <tr>
          <th>Subject</th>
          <th>Grade</th>
          <th>Credit Hours</th>
        </tr>
      </thead>
      <tbody>
        @for ($i = 1; $i <= $num_subjects; $i++)
          @php
            $subject_name = request('subject_name_' . $i);
            $subject_grade = request('subject_grade_' . $i);
            $subject_credits = request('subject_credit_' . $i);
          @endphp
          <tr>
            <td>{{ $subject_name }}</td>
            <td>{{ $subject_grade }}</td>
            <td>{{ $subject_credits }}</td>
          </tr>
        @endfor
      </tbody>
    </table>
    <p><strong>GPA:</strong> {{ $gpa }}</p>
  </div>
</body>
</html>

