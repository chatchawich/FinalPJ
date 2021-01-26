let userList = document.querySelector('#userList');
let form = document.querySelector('#addActivity');


function renderUser(doc){
    let li = document.createElement('li');
    let name = document.createElement('span');
    let  code = document.createElement('span');
    let year = document.createElement('span');
    let  faculty = document.createElement('span');
    let  project = document.createElement('span');

    li.setAttribute('data-id', doc.id);
    name.textContent = doc.data().name;
    code.textContent = doc.data().code;
    year.textContent = doc.data().year;
    faculty.textContent = doc.data().faculty;
    project.textContent = doc.data().project;

    li.appendChild(name);
    li.appendChild(code);
    li.appendChild(year);
    li.appendChild(faculty);
    li.appendChild(project);

    userList.appendChild(li);
}

//db.collection   ('user').get().then( user=>{
   // user.docs.forEach(doc => {
   //  console.log(doc.data())   
   //  renderUser(doc);
   // })

//});

form.addEventListener('submit',(e) =>{
    e.preventDefault();
    db.collection('user').add({
        name: form.name.value,
        code: form.code.value,
        year: form.year.value,
        faculty: form.faculty.value,
        project: form.project.value
    })
    form.name.value ='';
    form.code.value ='';
    form.year.value ='';
    form.faculty.value ='';
    form.project.value ='';
});
 
// real-time database
db.collection('user').orderBy('name').onSnapshot(snapshot => {
    let changes = snapshot.docChanges();
    changes.forEach(changes =>{
        // console.log(changes );
        if (changes.type == 'added'){
            renderUser(changes.doc);
        }
    })
});

