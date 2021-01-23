<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Google Firebase Authentication</title>
    </head>
    <body>
        <button type="button" name="buttom" onclick="GoogleSingIn">Google SingIn</button>
        <button type="button" name="buttom" onclick="GoogleSingOut">Google SingOut</button>
        <!-- The core Firebase JS SDK is always required and must be listed first -->
        <script src="https://www.gstatic.com/firebasejs/8.2.4/firebase-app.js"></script>

        <!-- TODO: Add SDKs for Firebase products that you want to use
            https://firebase.google.com/docs/web/setup#available-libraries -->
        <script src="https://www.gstatic.com/firebasejs/8.2.4/firebase-analytics.js"></script>

        <script>
        // Your web app's Firebase configuration
        // For Firebase JS SDK v7.20.0 and later, measurementId is optional
        var firebaseConfig = {
            apiKey: "AIzaSyCEPLlbn9OxnqFJrxzu6xy-f8w6td0ddjo",
            authDomain: "sdt-psu-f1194.firebaseapp.com",
            projectId: "sdt-psu-f1194",
            storageBucket: "sdt-psu-f1194.appspot.com",
            messagingSenderId: "250396603418",
            appId: "1:250396603418:web:63c56dd1f7deb0eb560da3",
            measurementId: "G-YN7HK3G4PB"
        };
        // Initialize Firebase
        firebase.initializeApp(firebaseConfig);
        firebase.analytics();

        var provider = new firebase.auth.GoogleAuthProvider();
        function GoogleSingIn() {
            firebase.auth().singInWithPopup(provider).then(function(result) {
                var token = result.credential.accessToken;
                var user = result.user;

                console.log(token);
                console.log(user);
            }).catch(function(error) {
                var errorCode = error.code;
                var errorMessage = error.message;
                console.log(error.code)
                console.log(error.message)
            });
        
        function GoogleSingOut() {
            firebase.auth().singOut()
            .thenZfunction() {
                console.log('Signout Succesfull')
            }, function(error) {
                console.log('Sigout Failed')
            });
        }
        </script>
    </body>
</html>