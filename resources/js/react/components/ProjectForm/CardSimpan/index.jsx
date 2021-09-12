import React from 'react';

function CardSimpan({ isEdit, onSubmit, onDelete, loading, disabled }) {
  return (
    <div className="card mb-3">
      <div className="card-body d-flex justify-content-end">
        <button
          onClick={onSubmit}
          className="btn btn-primary btn-sm js-simpan-btn"
          type="button"
          disabled={disabled}
        >
          {loading ? 'Tunggu Sebentar...' : 'Simpan'}
        </button>

        {isEdit && (
          <button
            onClick={onDelete}
            className="btn btn-danger btn-sm js-simpan-btn ms-2"
            type="button"
            disabled={disabled}
          >
            {loading ? 'Tunggu Sebentar...' : 'Hapus'}
          </button>
        )}
      </div>
    </div>
  );
}

export default React.memo(CardSimpan);