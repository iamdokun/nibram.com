// ***************************** //
// let myFunction = () => {
//     let replyBtn = document.getElementsByClassName('replyBtn');
//     let replied = document.getElementsByClassName('replied');
//     for (let i = 0; i < replyBtn.length; i++) {
//         for (let j = 0; j < replied.length; j++) {
//             let img = replied[j];
//             let button = replyBtn[i]; 
            
//             if (button.style.display = 'block') {
//                 button.style.display = 'none';
//                 img.style.display = 'block';
//            }
//         }
//     }
    
    
// };
let replyBtn = document.getElementsByClassName('replyBtn');
let replied = document.getElementsByClassName('replied');
// let button;
// let img;

// for (let i = 0; i < replyBtn.length; i++) {
    
//     for (let j = 0; j < replied.length; j++) {
//         let img = replied[j];
//         let button = replyBtn[i]; 
//         // console.log(img);
        
//         button.addEventListener('click', (e) => {
//             console.log(e);
//             if (button.style.display = 'block') {
//                 button.style.display = 'none';
//                 // for (let k = 0; k < img.length; k++) {
//                 //     let current = img[k];
//                 //     current.style.display = 'block';
//                 // }
//                 img.style.display = 'block';
//            }
//         });

        
//     }
// }


for (let i = 0; i < replyBtn.length; i++) {
    
        let button = replyBtn[i]; 
        // console.log(img);
        
        button.addEventListener('click', (e) => {
            console.log(e);
            if (button.style.display = 'block') {
                button.style.display = 'none';
                // for (let k = 0; k < img.length; k++) {
                //     let current = img[k];
                //     current.style.display = 'block';
                // }
                replied[i].style.display = 'block';
           }
        });

        

}
