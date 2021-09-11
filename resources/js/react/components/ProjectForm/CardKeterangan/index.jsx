import React from 'react';


function CardKeterangan({ form, onChange, disabled }) {
  return (
    <div className="card mb-3">
      <div className="card-header">
        <span>
          <strong>Keterangan</strong>
        </span>
      </div>
      <div className="card-body">
        <div className="form-group">
          <textarea
            onChange={onChange}
            name="keterangan"
            className="form-control"
            placeholder="Tulis keterangan disini"
            rows="4"
            disabled={disabled}
            value={form?.keterangan}
          ></textarea>
        </div>
      </div>
    </div>
  );
}

export default React.memo(CardKeterangan);