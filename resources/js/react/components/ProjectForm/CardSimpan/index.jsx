import React from 'react';

function CardSimpan({ onSubmit }) {
  return (
    <div className="card mb-3">
      <div className="card-body d-flex justify-content-end">
        <button
          onClick={onSubmit}
          className="btn btn-primary btn-sm js-simpan-btn"
          type="button"
        >
          Simpan
        </button>
      </div>
    </div>
  );
}

export default React.memo(CardSimpan);