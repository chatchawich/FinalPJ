let userList = document.querySelector('#userList');
let form = document.querySelector('#addreport')

function renderUser(doc) {
    let li = document.createElement('li')
    let report = document.createElement('span')
    let name = document.createElement('span')

    li.setAttribute('data-id', doc.id);
    report.textContent = doc.data().report;
    name.textContent = doc.data().name;

    li.appendChild(report);
    li.appendChild(name);

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
        name: form.name.value,
    })
    form.report.value ='';
    form.name.value ='';
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