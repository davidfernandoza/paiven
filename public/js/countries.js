class Countries{

	 getCountries() {

		return new Promise(response)

		function response(resolve){

			// Optener de paises de la BD:
			$.ajax({
				type: 'GET',
				url: `/api/countries/trm`
			}).done(getCountries)

			function getCountries(data){
				resolve(data)
			}
		}
	}
}
