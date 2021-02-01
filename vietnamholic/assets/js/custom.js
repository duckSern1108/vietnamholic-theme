const icon = document.getElementById("nav-icon3")
	icon.onclick = () => {
		icon.classList.toggle('open')
		
    }
    function searchChange() {
        document.getElementById('searchBtn').style.display = 'none'
        document.getElementById('searchForm').style.display = 'inline-flex'
    }

function navbarHover(id) {
    const list = document.getElementById(`navbarDropdown${id}Data`)
     list.classList.toggle('d-block')
}

function navbarBtnClick(id) {
    document.getElementById(id).classList.toggle('rt0')
    const newId = id.replace('btn','')
    const list = document.getElementById(`navbarDropdown${newId}Data`)
    list.classList.toggle('d-block')
     
}