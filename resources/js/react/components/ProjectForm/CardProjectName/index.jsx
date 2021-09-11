import React from "react";

function CardProjectName({ onChange, form }) {
  return (
    <div className="card mb-3">
      <div className="card-header">
        <span>
          <strong>Nama Project</strong>
        </span>
      </div>
      <div className="card-body">
        <div className="form-group">
          <input
            name="project_name"
            className="form-control"
            type="text"
            placeholder="Nama Project"
            onChange={onChange}
            value={form.project_name}
          />
        </div>
      </div>
    </div>
  );
}

export default React.memo(CardProjectName);