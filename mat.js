var animal = ['dog', 'goat', 'cow', 'pig', 'lion','deer','bear'];

	function validateAnimal(){
		// body...
		// alert('name of animal');
		var user_input = document.getElementById('animalname').value;
		// alert(user_input);

		for (var i = 0; i < animal.length; i++) {
			animal[i]
			// console.log(animal[i]);
			if (user_input == animal[i]) {
				alert("found");
				return false;
			}
		}

		alert('not found !');
		return false;
	}