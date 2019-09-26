let trm = null
const format = new FormatNumber()
const formatString = new FormatString()

$(document).ready(main)

function main () {

	const ipCountry = new IpCountry()
	const countries = new Countries()
	const localStorage = new LocalStorage()
	let ipName = null
	let status = false

	// Optener ip del pais
	ipCountry.getCountry().then(dataIpCountry => {
		ipName = dataIpCountry
		getDatabase()
	}).catch(() => {getDatabase()})


	// Optener paises de la BD:
	function getDatabase() {
		countries.getCountries().then(printCountries)
	}

	// Imprimir lista de paises en el DOM:
	function printCountries(countriesDataDB){

		countriesDataDB.forEach(countryData => {

			// Guardar data en local Storage:
			localStorage.saveData(countryData.country_id, countryData)
			let name = formatString.capitalize(countryData.name)

			// Listar paises
			$('#fromCountry').append(`
				<div 	class="dropdown-item"
				onClick="getTrm(${countryData.country_id})">
				<img src="/images/flags/${name}.svg" width="40px" class="flag"/>
				<strong>${countryData.coin}</strong> - ${name}
				</div>`)


				// Si el IP existe
				if (ipName == name) {
					$('#fromCountrySpan')
					.text(countryData.coin)
					.append(`<img
						src="/images/flags/${name}.svg"
						alt="bandera"
						width="40"
						class="flagS">`)
						$('#textFrom').text(`Tu envías desde ${name}`)
						printRate(name, countryData.value)
						status = true
					}
				})

				// Si el IP no existe en BD:
				if (!status) {
					let name = formatString.capitalize(countriesDataDB[0].name)
					$('#fromCountrySpan')
					.text(countriesDataDB[0].coin)
					.append(`<img
						src="/images/flags/${name}.svg"
						alt="bandera"
						width="40"
						class="flagS">`)
						$('#textFrom').text(`Tu envías desde ${name}`)
						printRate(name, countriesDataDB[0].value)
					}


					// Habilitar campo:
					$('#from').removeAttr('readonly')
				}

				// Evitar la escritura de letras
				$('#from').keydown(event => {

					let key = event.keyCode
					if((key < 48 || key > 57) && (key < 96 || key > 105) && (key < 8 || key > 8)){
						return false
					}
					else {

						// Capturar el valor escrito:
						$('#from').keyup(data => {
							getChangeTRM(data.currentTarget.value)})
						}

					});
				}

				// Optener data en local Storage cuando se llama del select:
				function getTrm(id) {
					const localStorage = new LocalStorage()
					localStorage.getData(id).then(getLocaCountry)
				}

				// Procesamiento del local storage
				function getLocaCountry(country) {
					let name = formatString.capitalize(country.name)
					let value = $('#from').val()

					$('#textFrom').text(`Tu envías desde ${name}`)
					$('#fromCountrySpan')
					.text(country.coin)
					.append(`<img
						src="/images/flags/${name}.svg"
						alt="bandera"
						width="40"
						class="flagS">`)

						$('#textFrom').text(`Tu envías desde ${name}`)
						printRate(name, country.value)

						if (value != '') {
							getChangeTRM(value)
						}
					}

					// Cambio de valor en el DOM:
					function getChangeTRM(value) {
						let numberOrigin = format.originNumber(value)
						let valueEnd = format.newNumber(Number(numberOrigin / trm).toFixed(2))
						let numFrom = format.newNumber(numberOrigin)
						$('#to').val(valueEnd)
						$('#from').val(numFrom)
					}

					// Impresion de la tasa
					function printRate(name, rate) {
						$('#rateDefault').remove()
						$('#rate').append(`<p id="rateDefault">Tasa de cambio para <samp>${name}</samp> es de <strong>${rate}</strong></p>`)
						trm = rate
					}
