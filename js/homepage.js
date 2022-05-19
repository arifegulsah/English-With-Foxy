

function display()
		{
			var btn = document.getElementById('btn');
			var div = document.getElementById('sutun1');

			btn.addEventListener('click', () =>{
				if(div.style.display === 'none'){
					div.style.display = 'block';
				}else {
					div.style.display = 'none';
				}
			})
		} 