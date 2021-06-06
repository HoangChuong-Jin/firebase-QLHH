<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/8.6.5/firebase-app.js"></script>

<!-- Firestore -->
<script src="https://www.gstatic.com/firebasejs/8.6.5/firebase-firestore.js"></script>

<!-- Auth -->
<script src="https://www.gstatic.com/firebasejs/8.6.5/firebase-auth.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="https://www.gstatic.com/firebasejs/8.6.5/firebase-analytics.js"></script>

<script>
	// Your web app's Firebase configuration
	// For Firebase JS SDK v7.20.0 and later, measurementId is optional
	var firebaseConfig = {
		apiKey: "AIzaSyAv6Et9y-DguDTRP634xXyBo74ccI_CXBE",
	  	authDomain: "qlhanhhoa-h2c.firebaseapp.com",
	  	projectId: "qlhanhhoa-h2c",
	  	storageBucket: "qlhanhhoa-h2c.appspot.com",
	  	messagingSenderId: "190496227390",
	  	appId: "1:190496227390:web:3caac44324ef98cebf116f",
	  	measurementId: "G-VSVQWP854S"
	};
	// Initialize Firebase
	firebase.initializeApp(firebaseConfig);
	firebase.analytics();
	var db = firebase.firestore();
</script>

<!--<script>
	var email='<?php echo $_POST['email']; ?>';
	var password='<?php echo $_POST['Password']; ?>';
	firebase.auth().signInWithEmailAndPassword(email,password)
		.then((userCredential)=>{
			var user = userCredential.user;
			$.ajax({
				type:'POST',
				url:'DangNhap_ajax.php',
				data: {
					uid: user.uid,
					email: user.email
				},
				dataType:'text',
				success: function(response) {
					location.href='index.php';
				}
			});
		})
		.catch((error)=>{
	});
</script>-->