<!-- HTML top code goes here -->

<?

// From processing takes place here. message displayed here too
require('form/form.class.php');
$form = new Form();
$form->processForm(

	'priscillaking.com' // Put you mail domain here
	,
	'Priscilla King Art' // Put your site name / form name here
	,
	'priscillaanneking@gmail.com' // Where will the form notification be sent?
	,
	'noreply@priscillaking.com' // This what the form FROM: address wil be, if the form submissions doesn't contain an email field

);


?>

<!-- HTML bottom code goes here -->
