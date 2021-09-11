import React from 'react';


function CardPathSSIS({ onChange, form }) {
  return (
    <div className="card mb-3">
      <div className="card-header">
        <span>
          <strong>Path SSIS Asli</strong>
        </span>
      </div>
      <div className="card-body">
        <div className="form-group">
          <input
            name="original_path"
            className="form-control"
            type="text"
            placeholder="eg: /ssis/path"
            value={form.original_path}
            onChange={onChange}
          />
        </div>
      </div>
    </div>
  );
}


export default React.memo(CardPathSSIS);