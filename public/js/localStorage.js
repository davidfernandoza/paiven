class  LocalStorage{
	async getData(id){		
		return await JSON.parse(localStorage.getItem(id))
	}
	
	async saveData(id, data) {
		await localStorage.setItem(id, JSON.stringify(data))
		return 200
	}

	async removeData(id) {
		await localStorage.removeItem(id)
		return 200
	}
}



