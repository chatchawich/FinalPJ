let userList = document.querySelector('#userList');
let form = document.querySelector('#addreport')

function renderUser(doc) {
    let li = document.createElement('li')
    let report = document.createElement('span')

    li.setAttribute('data-id', doc.id);
    report.textContent = doc.data().report;

    li.appendChild(report);

    userList.appendChild(li);
}

//db.collection('user').get().then(user =>{
  //  user.docs.forEach(doc => {
  //      console.log(doc.data())
  //      renderUser(doc);
 //   });
//})


form.addEventListener('submit',(e) =>{
    e.preventDefault();
    db.collection('user').add({
        report: form.report.value,
    })
    form.report.value ='';
});
//real-time database
db.collection('user').orderBy('report').onSnapshot(snapshot => {
    let changes = snapshot.docChanges();
    changes.forEach(changes =>{
        //console.log(changes);
        if(changes.type == 'added'){
            renderUser(changes.doc);
        }
    })
})