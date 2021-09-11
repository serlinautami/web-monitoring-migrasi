import React from 'react';

function ModalFormJob({ form, onChange, onClose, onSubmit }) {
  return (
    <div
      className="modal fade"
      id="modalFormJob"
      data-coreui-backdrop="static"
      data-coreui-keyboard="false"
      tabIndex={-1}
      aria-labelledby="modalFormJobLabel"
      aria-hidden="true"
    >
      <div className="modal-dialog">
        <div className="modal-content">
          <div className="modal-header">
            <h5 className="modal-title" id="modalFormJobLabel">
              Form Job
            </h5>
            <button
              type="button"
              className="btn-close"
              onClick={onClose}
              aria-label="Close"
            ></button>
          </div>
          <div className="modal-body">
            <form onSubmit={onSubmit}>
              <div className="form-group mb-3">
                <label className="form-label">Nama Job</label>
                <input
                  name="job_name"
                  type="text"
                  className="form-control"
                  placeholder="Nama job"
                  onChange={onChange}
                  value={form?.job_name}
                />
              </div>

              <div className="form-group mb-3">
                <label className="form-label">Keterangan</label>
                <textarea
                  name="keterangan"
                  className="form-control"
                  placeholder="tulis keterangan disini"
                  onChange={onChange}
                  value={form?.keterangan}
                ></textarea>
              </div>
              <button
                className="btn btn-primary btn-sm"
                type="submit"
              >
                Simpan
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  );
};


export default React.memo(ModalFormJob);
