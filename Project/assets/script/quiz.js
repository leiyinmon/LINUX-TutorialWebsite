// scripts here:

	function submitQuiz(_quizNum) {
		console.log('submitted');
		
	var quizNum = _quizNum;
	var exp;
	
	// get each answer score
		function answerScore (qName) {
			var radiosNo = document.getElementsByName(qName);

			for (var i = 0, length = radiosNo.length; i < length; i++) {
   				if (radiosNo[i].checked) {
			// do something with radiosNo
					var answerValue = Number(radiosNo[i].value);
				}
			}
			// change NaNs to zero
			if (isNaN(answerValue)) {
				answerValue = 0;
			}
			return answerValue;
		}

	// calc score with answerScore function
		var calcScore = (answerScore('q1') + answerScore('q2') + answerScore('q3'));
		console.log("CalcScore: " + calcScore); // it works!
	
		function getExp(qNum)
		{
			//ERICA ADD HERE
		
			if(quizNum == 1)
			{
				if(qNum == 1)
				{
					exp = "A process is just an action of program files being executing that ultimately perform an action. An example of a process would be starting a text editor or opening a browser. See the Files vs. Processes tab of the tutorial for more information.";
					document.getElementById('correctString1').style.color="green";
				}
				else if(qNum == 2)
				{
					exp = "Just like a Windows 7 machine you might have at home, work, or school, the UNIX operating system has a graphical interface that lets the users interact with the machine through keyboard and mouse clicks. See the What\'s UNIX? cont. tab of the tutorial for more information.";
					document.getElementById('correctString2').style.color="green";
				}
				else if(qNum == 3)
				{
					exp = "The UNIX operating system is made up of three parts: The kernel, the shell, and the programs. See the What is a Terminal tab for more information."; 
					document.getElementById('correctString3').style.color="green";
				}
			}
			else if(quizNum == 2)
			{
				if(qNum == 1)
				{
					exp = "The top of the hierarchy is traditionally called root (written as a slash /). Refer back to the UNIX File Hierarchy tab to for more information.";
					document.getElementById('correctString1').style.color="green";
				}
				else if(qNum == 2)
				{
					exp = "To see all of the files in the working directory, including the hidden files, type ls -a. Refer back to the Listing Public and Hidden Files tab for more information.";
					document.getElementById('correctString2').style.color="green";
				}
				else if(qNum == 3)
				{
					exp = "pwd stands for print working directory, and it shows you the current directory you reside within the terminal. Refer back to the Print Working Directory tab for more information.";
					document.getElementById('correctString3').style.color="green";
				}
			}
			else if(quizNum == 3)
			{
				if(qNum == 1)
				{
					exp = "Short for \'manual\' pages, the man pages are just pages of documentation for commands in UNIX-based systems. Refer back to the Introduction to Man Pages tab for more information.";
					document.getElementById('correctString1').style.color="green";
				}
				else if(qNum == 2)
				{
					exp = "The | line is known as a pipe in UNIX, and it just means that we are telling the terminal that we want to join two commands. Refer back to the Using 'man' cont. tab for more information";
					document.getElementById('correctString2').style.color="green";
				}
				else if(qNum == 3)
				{
					exp = "To get help with the UNIX command ls,  Type man ls. Refer back to the Using \'man\' tab for more information.";
					document.getElementById('correctString3').style.color="green";
				}
			}
			else if(quizNum == 4)
			{
				if(qNum == 1)
				{
					exp = "To exit a file without saving, hit the escape key followed :q! and press enter. For more information, refer back to the Editing Files - vim cont. tabs.";
					document.getElementById('correctString1').style.color="green";
				}
				else if(qNum == 2)
				{
					exp = "Vi has two modes, insert and command mode. By default, when started, Vi opens in command mode. Refer back to the Editing Files - vim cont. tabs for more information";
					document.getElementById('correctString2').style.color="green";
				}
				else if(qNum == 3)
				{
					exp = "The UNIX command called \'find\' that can locate a specific file by name or extension. Refer to the Using find tab for more information";
					document.getElementById('correctString3').style.color="green";
				}
			}
			else if(quizNum == 5)
			{
				if(qNum == 1)
				{
					exp = "Each permission value is assigned a number, R = 4, W = 2, X = 1. Refer back to the Viewing File Permissions cont. tab for more information.";
					document.getElementById('correctString1').style.color="green";
				}
				else if(qNum == 2)
				{
					exp = " 777 is a total of all three permissions, read, write, and execute, for the creator (the first 7), the creator's primary group (second 7) and everyone else (the final 7). Refer back to the Adding File Permissions tab for more information.";
					document.getElementById('correctString2').style.color="green";
				}
				else if(qNum == 3)
				{
					exp = "Each permission value is assigned a number, R = 4, W = 2, X = 1. 300 means that the user has write and execute access and groups and everyone else have no access. Refer back to the Viewing File Permissions tab for more information.";
					document.getElementById('correctString3').style.color="green";
				}
			}
			else if(quizNum == 6)
			{
				if(qNum == 1)
				{
					exp = "To SSH, type ssh followed by the hostname or IP address of the device you'd like to connect to. Refer back to the Introduction to SSH tab to get more information.";
					document.getElementById('correctString1').style.color="green";
				}
				else if(qNum == 2)
				{
					exp = "For security reasons, UNIX systems do not display your password as you type. Refer back to the SSH passwords tab for more information.";
					document.getElementById('correctString2').style.color="green";
				}
				else if(qNum == 3)
				{
					exp = "To view where you are into a remote machine, perform a pwd to see what directory you landed in. Refer back to the Testing SSH tab for more information.";
					document.getElementById('correctString3').style.color="green";
				}
			}
			else if(quizNum == 7)
			{
				if(qNum == 1)
				{
					exp = "SCP stands for secure copy. Refer back to the Introduction to Remote Management tab for more information.";
					document.getElementById('correctString1').style.color="green";
				}
				else if(qNum == 2)
				{
					exp = "Adding a * into a filename actually adds a wildcard character, meaning that any character can be in its place. Refer back to the Introduction to Secure Copy tab or more information. ";
					document.getElementById('correctString2').style.color="green";
				}
				else if(qNum == 3)
				{
					exp = "\'scp stacysaccount@otherhost.com :/home/stacy/archive/image*.jpg /home/stacy/downloads\'  is proper syntax for a secure copy done from a remote machine to a local machine. See the Copying Locally tab for more information.";
					document.getElementById('correctString3').style.color="green";
				}
			}
			return exp;
		}
		
	// function to return correct answer string
		function correctAnswer (correctStringNo, qNumber) {
			console.log("qNumber: " + qNumber);  // logs 1,2,3,4 after called below
			return ("<br/> Correct answer for question #" + qNumber + ": &nbsp;<strong>" +
				(document.getElementById(correctStringNo).innerHTML) + "</strong>" +"<br/> <br/>"
				+getExp(qNumber) );
			}
			
		
	// print correct answers only if wrong (calls correctAnswer function)
		if (answerScore('q1') === 0) {
			document.getElementById('correctAnswer1').innerHTML = correctAnswer('correctString1', 1);
		}
		if (answerScore('q2') === 0) {
			document.getElementById('correctAnswer2').innerHTML = correctAnswer('correctString2', 2);
		}
		if (answerScore('q3') === 0) {
			document.getElementById('correctAnswer3').innerHTML = correctAnswer('correctString3', 3);
		}

	// calculate "possible score" integer
		var questionCountArray = document.getElementsByClassName('question');

		var questionCounter = 0;
		for (var i = 0, length = questionCountArray.length; i < length; i++) {
			questionCounter++;
		}

	// show score as "score/possible score"
		var showScore = "Your Score: " + calcScore +"/" + questionCounter;
	// if 3/3, "perfect score!"
		if (calcScore === questionCounter) {
			showScore = showScore + "&nbsp; <strong>Perfect Score!</strong>"
		};
		document.getElementById('userScore').innerHTML = showScore;
		document.getElementById('userScore').style.color = '#F92672';
	}

$(document).ready(function() {

	$('#submitButton').click(function() {
		$(this).addClass('hide');
	});

});