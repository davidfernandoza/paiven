
class FormatNumber{

	constructor(){
		this.separador = "." // separador para los miles
		this.sepDecimal = ',' // separador para los decimales
	}

	format(number){
		number +='';

		let
		splitStr = number.split('.'),
		splitLeft = splitStr[0],

		// Para decimal
		splitRight = splitStr.length > 1 ? this.sepDecimal + splitStr[1] : '',
		regx = /(\d+)(\d{3})/

		while (regx.test(splitLeft)) {
			splitLeft = splitLeft.replace(regx, '$1' + this.separador + '$2');
		}

		// Para decimal
		return this.simbol + splitLeft + splitRight;
	}

	newNumber(number, simbol){
		this.simbol = simbol ||'';
		return this.format(number);
	}

	originNumber(number, simbol){
		number = number.replace(simbol, '')
		number = number.split('.').join('')
		number = number.replace(',', '.')
		return number
	}
}
