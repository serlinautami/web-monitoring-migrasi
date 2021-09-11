import React from 'react';

function CardStatus({ onChange, form }) {
  console.log('asdasdasd')
  let statusMigrasi = [
    { value: "", label: "Tidak Ada" },
    { value: "migrated", label: "Sudah dimigrasi" },
    { value: "not-migrated", label: "Tidak dimigrasi" },
  ];

  let statusStaging = [
    { value: "no", label: "Tidak Ada" },
    { value: "yes", label: "Ada" },
  ];

  let statusUpload = [
    { value: "", label: "Tidak Ada" },
    { value: "onprogress", label: "On Progress" },
    { value: "done-upload", label: "Sudah Upload" },
    { value: "job-disable", label: "Job Disable" },
    { value: "done-deploy", label: "Sudah Deploy" },
    { value: "rollback", label: "Rollback" },
    { value: "blocked", label: "Blocked" },
  ];

  let statusRunning = [
    { value: "", label: "Tidak Ada" },
    { value: "running", label: "Running" },
    { value: "pending", label: "Pending" },
    { value: "fail", label: "Gagal" },
  ];

  let statusImport = [
    { value: "", label: "Tidak Ada" },
    { value: "imported", label: "Sudah diimport" },
    { value: "not-imported", label: "Belum diimport" },
  ]

  return (
    <div className="card mb-3">
      <div className="card-header">
        <span>
          <strong>Status</strong>
        </span>
      </div>
      <div className="card-body">
        <div className="form-group mb-3">
          <label className="form-label">Status Migrasi</label>
          <select
            value={form.status_migrasi}
            name="status_migrasi"
            className="form-select"
            onChange={onChange}
          >
            {statusMigrasi.map(function (option, index) {
              return (
                <option key={index} value={option.value}>
                  {option.label}
                </option>
              );
            })}
          </select>
        </div>

        <div className="form-group mb-3">
          <label className="form-label">0000_staging ?</label>
          <select
            name="staging"
            className="form-select"
            onChange={onChange}
            value={form.staging}
          >
            {statusStaging.map(function (option, index) {
              return (
                <option key={index} value={option.value}>
                  {option.label}
                </option>
              );
            })}
          </select>
        </div>

        <div className="form-group mb-3">
          <label className="form-label">Status upload</label>
          <select name="status_upload" className="form-select" onChange={onChange} value={form.status_upload}>
            {statusUpload.map(function (option, index) {
              return (
                <option key={index} value={option.value}>
                  {option.label}
                </option>
              );
            })}
          </select>
        </div>

        <div className="form-group mb-3">
          <label className="form-label">Status running</label>
          <select
            name="status_running"
            className="form-select"
            onChange={onChange}
            value={form.status_running}
          >
            {statusRunning.map(function (option, index) {
              return (
                <option key={index} value={option.value}>
                  {option.label}
                </option>
              );
            })}
          </select>
        </div>

        <div className="form-group mb-3">
          <label className="form-label">Status import</label>
          <select
            name="status_import"
            className="form-select"
            onChange={onChange}
            value={form.status_import}
          >
            {statusImport.map(function (option, index) {
              return (
                <option key={index} value={option.value}>{option.label}</option>
              )
            })}
          </select>
        </div>
      </div>
    </div>
  );
}

export default React.memo(CardStatus);