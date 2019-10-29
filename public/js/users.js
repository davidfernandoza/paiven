class Users{

	 getUser() {

		return new Promise(response)

		function response(resolve){

			// Optener de paises de la BD:
			$.ajax({
				type: 'GET',
				url: `/api/users/visible`
			}).done(getUsers)

			function getUsers(data){
				resolve(data)
			}
		}
	}
}
