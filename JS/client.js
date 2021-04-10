// ***************************** //
let myFunction = () => {
    let replyBtn = document.getElementsByClassName('replyBtn');
    let replied = document.getElementsByClassName('replied');
    for (let i = 0; i < replyBtn.length; i++) {
        for (let j = 0; j < replied.length; j++) {
            let img = replied[j];
            let button = replyBtn[i]; 
            
            if (button.style.display = 'block') {
                button.style.display = 'none';
                img.style.display = 'block';
           }
        }
    }
    
    
};