
<html>
<head>
  <title>Student GPA Calculator</title>
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
  <script>
    var numSubjects = 1;

    function addSubject() {
      numSubjects++;
      var container = document.getElementById("subjects_container");

      // Create a new fieldset for the subject
      var subjectFieldset = document.createElement("fieldset");
      subjectFieldset.id = "subject_" + numSubjects;

      // Create the subject name input
      var subjectNameLabel = document.createElement("label");
      subjectNameLabel.innerHTML = "Subject Name: ";
      var subjectNameInput = document.createElement("input");
      subjectNameInput.type = "text";
      subjectNameInput.name = "subject_name_" + numSubjects;
      subjectNameInput.id = "subject_name_" + numSubjects;
      subjectFieldset.appendChild(subjectNameLabel);
      subjectFieldset.appendChild(subjectNameInput);

      // Create the subject grade input
      var subjectGradeLabel = document.createElement("label");
      subjectGradeLabel.innerHTML = "Grade: ";
      var subjectGradeInput = document.createElement("input");
      subjectGradeInput.type = "text";
      subjectGradeInput.name = "subject_grade_" + numSubjects;
      subjectGradeInput.id = "subject_grade_" + numSubjects;
      subjectFieldset.appendChild(subjectGradeLabel);
      subjectFieldset.appendChild(subjectGradeInput);

      // Create the subject credit hours input
      var subjectCreditLabel = document.createElement("label");
      subjectCreditLabel.innerHTML = "Credit Hours: ";
      var subjectCreditInput = document.createElement("input");
      subjectCreditInput.type = "text";
      subjectCreditInput.name = "subject_credit_" + numSubjects;
      subjectCreditInput.id = "subject_credit_" + numSubjects;
      subjectFieldset.appendChild(subjectCreditLabel);
      subjectFieldset.appendChild(subjectCreditInput);

      container.appendChild(subjectFieldset);
    }

    function removeSubject() {
      if (numSubjects > 1) {
        var container = document.getElementById("subjects_container");
        var subjectFieldset = document.getElementById("subject_" + numSubjects);
        container.removeChild(subjectFieldset);
        numSubjects--;
      }
    }
</script>

</head>
<body><div class="container">
  <h1>Student GPA Calculator</h1>
<form method="post" action="{{ url('/calculate-gpa') }}">
 @csrf
    <label for="student_name">Student Name:</label>
    <input type="text" name="student_name" id="student_name">
    <div id="subjects_container">
      <div id="subject_1">
        <label for="subject_name_1">Subject Name:</label>
        <input type="text" name="subject_name_1" id="subject_name_1">
        <label for="subject_grade_1">Grade:</label>
        <input type="text" name="subject_grade_1" id="subject_grade_1">
        <label for="subject_credit_1">Credit Hours:</label>
        <input type="text" name="subject_credit_1" id="subject_credit_1">
      </div>
    </div>
    <button class="signup-btn" type="button" onclick="addSubject()">Add Subject</button>
    <button class="signup-btn"type="button" onclick="removeSubject()">Remove Subject</button>
    <button class="signup-btn"type="submit">Calculate GPA</button>   </div>
  </form>
</body>
</html>



