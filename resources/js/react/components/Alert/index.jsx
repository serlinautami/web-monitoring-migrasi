import React from 'react';


function Alert({ message, type, onClose }) {
  return (
    <div className="container-lg">
      <div className="row">
        <div className="col-12">
          <div className={`alert alert-${type} w-100 alert-dismissible fade show`} role="alert">
            {message}
            <button type="button" className="btn-close" data-coreui-dismiss="alert" aria-label="Close" onClick={onClose}></button>
          </div>
        </div>
      </div>
    </div>
  )
}

export default React.memo(Alert);