<!DOCTYPE html>
<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

<title>Login with PayPal - Demo App</title>

<style type="text/css">
body {
text-align: center;
}
</style>
</head>
<body>
<h1>Login with PayPal - Demo App</h1>
<p>Welcome! No boring signup here. Just use the following button to login.</p>

<hr/>

<p><span id="myContainer"></span></p>

<script src="https://www.paypalobjects.com/js/external/api.js"></script>
<script>
paypal.use( ["login"], function(login) {
login.render ({
"appid": "my-application-client-id",
"authend": "sandbox",
"scopes": "profile email address phone https://uri.paypal.com/services/paypalattributes",
"containerid": "myContainer",
"locale": "en-us",
"returnurl": "http://sandbox.hellofrancesco.com/paypal_test/return.php"
});
});
</script>
</body>
</html>