class IpCountry {

	getCountry (){
		return new Promise(resolve => {

			// Optener ip:
			this.getIp().then(getDataCountry).catch(sendError)

			// Optener pais por su IP:
			function getDataCountry(ip) {
				$.getJSON(`https://ipapi.co/${ip}/json/`)
				.done(sendCountry)
				.fail(sendError)
			}

			function sendCountry(country) {
				resolve(country.country_name)
			}

			function sendError(){
				resolve(false)
			}
		})
	}

	getIp (){
		return new Promise(response)

		function response(resolve, reject) {

			// Optener IP:
			$.getJSON('https://api.ipify.org?format=json')
			.done(doneResponseIp)
			.fail(failResponseIpCountry)

			function doneResponseIp(dataIp) {
				resolve(dataIp.ip)
			}

			function failResponseIpCountry() {
				reject(false)
			}
		}
	}


}
