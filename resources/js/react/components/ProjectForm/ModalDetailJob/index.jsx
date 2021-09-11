import React from 'react';

function ModalDetailJob({ onAdd, onEdit, onDelete, onClose, job }) {
  return (
    <div
      className="modal fade"
      id="modalDetailJob"
      data-coreui-backdrop="static"
      data-coreui-keyboard="false"
      tabIndex={-1}
      aria-labelledby="modalDetailJobLabel"
      aria-hidden="true"
    >
      <div className="modal-dialog modal-lg">
        <div className="modal-content">
          <div className="modal-header">
            <h5 className="modal-title" id="modalDetailJobLabel">
              Detail Job
            </h5>
            <button
              type="button"
              className="btn-close"
              aria-label="Close"
              onClick={onClose}
            ></button>
          </div>
          <div className="modal-body">
            <div className="container p-0 border border-1 mb-3">
              <div className="row g-0">
                <div className="col-12 col-sm-12 col-md-4 col-lg-3 p-2 border border-1 bg-light">
                  <p className="fw-bold m-0">Nama Job</p>
                </div>
                <div className="col-12 col-sm-12 col-md-8 col-lg-9 p-2 border border-1">
                  <p className="m-0">{job?.job_name}</p>
                </div>

                <div className="col-12 col-sm-12 col-md-4 col-lg-3 p-2 border border-1 bg-light">
                  <p className="fw-bold m-0">Keterangan</p>
                </div>
                <div className="col-12 col-sm-12 col-md-8 col-lg-9 p-2 border border-1">
                  <p className="m-0">{job?.keterangan}</p>
                </div>
              </div>
            </div>

            <div className="form-group mb-3">
              <button
                className="btn btn-primary btn-sm"
                type="button"
                onClick={() => onAdd(job)}
              >
                Tambah Job Step
              </button>
            </div>
            <div className="table-responsive">
              <table className="table table-bordered table-striped table-hover">
                <thead>
                  <tr>
                    <th>Nama Job Step</th>
                    <th>Keterangan</th>
                    <th width={150}>Aksi</th>
                  </tr>
                </thead>
                <tbody className="js-table-body-job-step">
                  {job?.job_steps?.length > 0 ?
                    (
                      <React.Fragment>
                        {job?.job_steps?.map(function (jobStep) {
                          return (
                            <tr>
                              <td>{jobStep?.job_step_name}</td>
                              <td>{jobStep?.keterangan}</td>
                              <td className="text-center">
                                <button
                                  className="btn btn-primary btn-sm me-1"
                                  type="button"
                                  onClick={() => onEdit(jobStep)}
                                >
                                  Edit
                                </button>
                                <button
                                  className="btn btn-danger btn-sm"
                                  type="button"
                                  onClick={() => onDelete(jobStep)}
                                >
                                  Hapus
                                </button>
                              </td>
                            </tr>
                          )
                        })}
                      </React.Fragment>
                    )
                    : (
                      <tr>
                        <td colSpan={3} className="text-center">Tidak ada data</td>
                      </tr>
                    )}
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  );
}


export default React.memo(ModalDetailJob);