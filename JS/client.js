// ***************************** //

let replyBtn = document.getElementsByClassName('replyBtn');
let replied = document.getElementsByClassName('replied');

for (let i = 0; i < replyBtn.length; i++) {
    
        let button = replyBtn[i]; 
        // console.log(img);
        
        button.addEventListener('click', (e) => {
            console.log(e);
            if (button.style.display = 'block') {
                button.style.display = 'none';
                replied[i].style.display = 'block';
           }
        });

        

}
