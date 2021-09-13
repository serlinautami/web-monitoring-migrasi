const { default: axios } = require("axios");

// on press detail user
if(document.querySelector('#detail-user')) {
  const deleteBtn = document.querySelector('.js-btn-delete');

  if(deleteBtn){
    deleteBtn.onclick = function() {
      const id = this.getAttribute('data-user-id');
      const conf = window.confirm('Yakin ingin menghapus user?');

if(id) {
      if(conf) {
        axios.delete(`/user/delete/${id}`).then(function(res) {
          window.alert('Berhasil menghapus user');
          window.location.href = '/user';
        }).catch(function(error) {
          console.log('error', error)
          window.alert('Terjadi kesalahan');
        })
      }
      }
    }
  };
}