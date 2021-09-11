import React from 'react';

function CardJobTable({ jobs, onAdd, onEdit, onDelete, onDetail }) {
  return (
    <div className="card mb-3">
      <div className="card-header">
        <span>
          <strong>Job list</strong>
        </span>
      </div>
      <div className="card-body">
        <div className="form-group mb-3">
          <button
            onClick={onAdd}
            type="button"
            className="btn btn-primary btn-sm js-add-job-btn"
          >
            Tambah Job
          </button>
        </div>
        <div className="table-responsive">
          <table className="table table-bordered table-hover table-striped">
            <thead>
              <tr>
                <th>Job Name</th>
                <th>Keterangan</th>
                <th width={180}>Aksi</th>
              </tr>
            </thead>
            <tbody className="js-table-body-job">
              {jobs?.length > 0 ? (
                <React.Fragment>
                  {jobs.map(function (job) {
                    return (
                      <tr key={job?.id}>
                        <td>{job?.job_name}</td>
                        <td>{job?.keterangan}</td>
                        <td className="text-center">
                          <button
                            onClick={() => onEdit(job)}
                            className="btn btn-sm btn-success me-1"
                          >
                            Edit
                          </button>
                          <button
                            onClick={() => onDelete(job)}
                            className="btn btn-sm btn-danger me-1"
                          >
                            Hapus
                          </button>
                          <button
                            onClick={() => onDetail(job)}
                            className="btn btn-sm btn-primary"
                          >
                            Detail
                          </button>
                        </td>
                      </tr>
                    )
                  })}
                </React.Fragment>
              ) : (<tr>
                <td colSpan="3" className="text-center">
                  Tidak ada data
                </td>
              </tr>)}
            </tbody>
          </table>
        </div>
      </div>
    </div>
  );
}

export default React.memo(CardJobTable);