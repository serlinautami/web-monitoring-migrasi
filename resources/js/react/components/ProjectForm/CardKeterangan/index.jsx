import React from 'react';


function CardKeterangan({ onChange }) {
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
          ></textarea>
        </div>
      </div>
    </div>
  );
}

export default React.memo(CardKeterangan);