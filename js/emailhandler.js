			function sendRegistered(email){
				Email.send({
				    SecureToken : "0f191263-67bb-44e9-94f7-a2e097a4934d",
				    To : email,
				    From : "bikebuddyy@gmail.com",
				    Subject : "BikeBuddy is here!!",
				    Body : "Thank You for registration!! We hope to serve you in the best way possible! "
				}).then(
				  message => alert(message)
				);
			}


			
			function sendFeebackReceived(email){
				Email.send({
				    SecureToken : "0f191263-67bb-44e9-94f7-a2e097a4934d",
				    To : email,
				    From : "bikebuddyy@gmail.com",
				    Subject : "Thank you for sharing your valuable feedback!!",
				    Body : "We promise to continue improving our services!!"
				}).then(
				  message => alert(message)
				);
			}

			
			function sendRideBooked(email){
				Email.send({
				    SecureToken : "0f191263-67bb-44e9-94f7-a2e097a4934d",
				    To : email,
				    From : "bikebuddyy@gmail.com",
				    Subject : "Your ride preference is submitted!!",
				    Body : "We will reach back once we find matching rides for you!!"
				}).then(
				  message => alert(message)
				);
			}
