const { default: axios } = require("axios");

// on press detail user
if(document.querySelector('#list-user')) {
  const modal = document.getElementById('modaldetail');
  modal.addEventListener('show.coreui.modal', function(e) {
    const button = e.relatedTarget;
    const id = button.getAttribute('data-user-id');

    axios.get(`/user/${id}`).then(function(res) {
      console.log('res.data', res);
      const user = res.data?.data;
      if(user) {

        // field
        const name = modal.querySelector('[data-detail-name]');
        const email = modal.querySelector('[data-detail-email]');
        const dob = modal.querySelector('[data-detail-dob]');
        const phone = modal.querySelector('[data-detail-phone]');
        const role = modal.querySelector('[data-detail-role]');
        const status = modal.querySelector('[data-detail-status]');

        // action
        const editBtn = modal.querySelector('.btn-edit');
        const deleteBtn = modal.querySelector('.btn-delete');
        
        name.textContent = user.name;
        email.textContent = user.email;
        dob.textContent = user.dob;
        phone.textContent = user.phone;
        role.textContent = user.role;
        status.textContent = user.status;
        editBtn.setAttribute('href', `/user/edit/${id}`);
        deleteBtn.setAttribute('data-user-id', id);

      }
    }).catch(function(err) {
      console.log('err', err)
      window.alert('Terjadi kesalahan')
    })
  })

  modal.addEventListener('hide.coreui.modal', function(e) {
    const name = modal.querySelector('[data-detail-name]');
    const email = modal.querySelector('[data-detail-email]');
    const dob = modal.querySelector('[data-detail-dob]');
    const phone = modal.querySelector('[data-detail-phone]');
    const role = modal.querySelector('[data-detail-role]');
    const status = modal.querySelector('[data-detail-status]');
    const editBtn = modal.querySelector('.btn-edit');
    editBtn.setAttribute('href', `#`);

    name.textContent = '';
    email.textContent = '';
    dob.textContent = '';
    phone.textContent = '';
    role.textContent = '';
    status.textContent = '';
  })

  const deleteBtn = modal.querySelector('.btn-delete');

  console.log('deleteBtn', deleteBtn)
  if(deleteBtn){
    console.log('masuk')
    deleteBtn.onclick = function() {
      const id = this.getAttribute('data-user-id');
      if(id) {
        axios.delete(`/user/delete/${id}`).then(function(res) {
          window.alert('Berhasil menghapus user');
          window.location.reload();
        }).catch(function(error) {
          console.log('error', error)
          window.alert('Terjadi kesalahan');
        })
      }
    }
  };
}