"use strict";
(self["webpackChunk"] = self["webpackChunk"] || []).push([["resources_js_react_components_ProjectForm_index_jsx"],{

/***/ "./resources/js/react/components/ProjectForm/CardJobTable/index.jsx":
/*!**************************************************************************!*\
  !*** ./resources/js/react/components/ProjectForm/CardJobTable/index.jsx ***!
  \**************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "./node_modules/react/index.js");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! react/jsx-runtime */ "./node_modules/react/jsx-runtime.js");




function CardJobTable(_ref) {
  var jobs = _ref.jobs,
      onAdd = _ref.onAdd,
      onEdit = _ref.onEdit,
      onDelete = _ref.onDelete,
      onDetail = _ref.onDetail;
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
    className: "card mb-3",
    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
      className: "card-header",
      children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
        children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("strong", {
          children: "Job list"
        })
      })
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
      className: "card-body",
      children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
        className: "form-group mb-3",
        children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("button", {
          onClick: onAdd,
          type: "button",
          className: "btn btn-primary btn-sm js-add-job-btn",
          children: "Tambah Job"
        })
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
        className: "table-responsive",
        children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("table", {
          className: "table table-bordered table-hover table-striped",
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("thead", {
            children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("tr", {
              children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("th", {
                children: "Job Name"
              }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("th", {
                children: "Keterangan"
              }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("th", {
                width: 180,
                children: "Aksi"
              })]
            })
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("tbody", {
            className: "js-table-body-job",
            children: (jobs === null || jobs === void 0 ? void 0 : jobs.length) > 0 ? /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(react__WEBPACK_IMPORTED_MODULE_0__.Fragment, {
              children: jobs.map(function (job) {
                return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("tr", {
                  children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("td", {
                    children: job === null || job === void 0 ? void 0 : job.job_name
                  }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("td", {
                    children: job === null || job === void 0 ? void 0 : job.keterangan
                  }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("td", {
                    className: "text-center",
                    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("button", {
                      onClick: function onClick() {
                        return onEdit(job);
                      },
                      className: "btn btn-sm btn-success me-1",
                      children: "Edit"
                    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("button", {
                      onClick: function onClick() {
                        return onDelete(job);
                      },
                      className: "btn btn-sm btn-danger me-1",
                      children: "Hapus"
                    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("button", {
                      onClick: function onClick() {
                        return onDetail(job);
                      },
                      className: "btn btn-sm btn-primary",
                      children: "Detail"
                    })]
                  })]
                }, job === null || job === void 0 ? void 0 : job.id);
              })
            }) : /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("tr", {
              children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("td", {
                colSpan: "3",
                className: "text-center",
                children: "Tidak ada data"
              })
            })
          })]
        })
      })]
    })]
  });
}

/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (/*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.memo(CardJobTable));

/***/ }),

/***/ "./resources/js/react/components/ProjectForm/CardKeterangan/index.jsx":
/*!****************************************************************************!*\
  !*** ./resources/js/react/components/ProjectForm/CardKeterangan/index.jsx ***!
  \****************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "./node_modules/react/index.js");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! react/jsx-runtime */ "./node_modules/react/jsx-runtime.js");




function CardKeterangan(_ref) {
  var onChange = _ref.onChange;
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
    className: "card mb-3",
    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
      className: "card-header",
      children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
        children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("strong", {
          children: "Keterangan"
        })
      })
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
      className: "card-body",
      children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
        className: "form-group",
        children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("textarea", {
          onChange: onChange,
          name: "keterangan",
          className: "form-control",
          placeholder: "Tulis keterangan disini",
          rows: "4"
        })
      })
    })]
  });
}

/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (/*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.memo(CardKeterangan));

/***/ }),

/***/ "./resources/js/react/components/ProjectForm/CardPathSSIS/index.jsx":
/*!**************************************************************************!*\
  !*** ./resources/js/react/components/ProjectForm/CardPathSSIS/index.jsx ***!
  \**************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "./node_modules/react/index.js");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! react/jsx-runtime */ "./node_modules/react/jsx-runtime.js");




function CardPathSSIS(_ref) {
  var onChange = _ref.onChange,
      form = _ref.form;
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
    className: "card mb-3",
    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
      className: "card-header",
      children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
        children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("strong", {
          children: "Path SSIS Asli"
        })
      })
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
      className: "card-body",
      children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
        className: "form-group",
        children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("input", {
          name: "original_path",
          className: "form-control",
          type: "text",
          placeholder: "eg: /ssis/path",
          value: form.original_path,
          onChange: onChange
        })
      })
    })]
  });
}

/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (/*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.memo(CardPathSSIS));

/***/ }),

/***/ "./resources/js/react/components/ProjectForm/CardProjectName/index.jsx":
/*!*****************************************************************************!*\
  !*** ./resources/js/react/components/ProjectForm/CardProjectName/index.jsx ***!
  \*****************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "./node_modules/react/index.js");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! react/jsx-runtime */ "./node_modules/react/jsx-runtime.js");




function CardProjectName(_ref) {
  var onChange = _ref.onChange,
      form = _ref.form;
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
    className: "card mb-3",
    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
      className: "card-header",
      children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
        children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("strong", {
          children: "Nama Project"
        })
      })
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
      className: "card-body",
      children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
        className: "form-group",
        children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("input", {
          name: "project_name",
          className: "form-control",
          type: "text",
          placeholder: "Nama Project",
          onChange: onChange,
          value: form.project_name
        })
      })
    })]
  });
}

/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (/*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.memo(CardProjectName));

/***/ }),

/***/ "./resources/js/react/components/ProjectForm/CardSimpan/index.jsx":
/*!************************************************************************!*\
  !*** ./resources/js/react/components/ProjectForm/CardSimpan/index.jsx ***!
  \************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "./node_modules/react/index.js");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! react/jsx-runtime */ "./node_modules/react/jsx-runtime.js");



function CardSimpan(_ref) {
  var onSubmit = _ref.onSubmit;
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
    className: "card mb-3",
    children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
      className: "card-body d-flex justify-content-end",
      children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("button", {
        onClick: onSubmit,
        className: "btn btn-primary btn-sm js-simpan-btn",
        type: "button",
        children: "Simpan"
      })
    })
  });
}

/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (/*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.memo(CardSimpan));

/***/ }),

/***/ "./resources/js/react/components/ProjectForm/CardStatus/index.jsx":
/*!************************************************************************!*\
  !*** ./resources/js/react/components/ProjectForm/CardStatus/index.jsx ***!
  \************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "./node_modules/react/index.js");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! react/jsx-runtime */ "./node_modules/react/jsx-runtime.js");




function CardStatus(_ref) {
  var onChange = _ref.onChange,
      form = _ref.form;
  console.log('asdasdasd');
  var statusMigrasi = [{
    value: "",
    label: "Tidak Ada"
  }, {
    value: "migrated",
    label: "Sudah dimigrasi"
  }, {
    value: "not-migrated",
    label: "Tidak dimigrasi"
  }];
  var statusStaging = [{
    value: "no",
    label: "Tidak Ada"
  }, {
    value: "yes",
    label: "Ada"
  }];
  var statusUpload = [{
    value: "",
    label: "Tidak Ada"
  }, {
    value: "onprogress",
    label: "On Progress"
  }, {
    value: "done-upload",
    label: "Sudah Upload"
  }, {
    value: "job-disable",
    label: "Job Disable"
  }, {
    value: "done-deploy",
    label: "Sudah Deploy"
  }, {
    value: "rollback",
    label: "Rollback"
  }, {
    value: "blocked",
    label: "Blocked"
  }];
  var statusRunning = [{
    value: "",
    label: "Tidak Ada"
  }, {
    value: "running",
    label: "Running"
  }, {
    value: "pending",
    label: "Pending"
  }, {
    value: "fail",
    label: "Gagal"
  }];
  var statusImport = [{
    value: "",
    label: "Tidak Ada"
  }, {
    value: "imported",
    label: "Sudah diimport"
  }, {
    value: "not-imported",
    label: "Belum diimport"
  }];
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
    className: "card mb-3",
    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
      className: "card-header",
      children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
        children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("strong", {
          children: "Status"
        })
      })
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
      className: "card-body",
      children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
        className: "form-group mb-3",
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("label", {
          className: "form-label",
          children: "Status Migrasi"
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("select", {
          value: form.status_migrasi,
          name: "status_migrasi",
          className: "form-select",
          onChange: onChange,
          children: statusMigrasi.map(function (option, index) {
            return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("option", {
              value: option.value,
              children: option.label
            }, index);
          })
        })]
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
        className: "form-group mb-3",
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("label", {
          className: "form-label",
          children: "0000_staging ?"
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("select", {
          name: "staging",
          className: "form-select",
          onChange: onChange,
          value: form.staging,
          children: statusStaging.map(function (option, index) {
            return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("option", {
              value: option.value,
              children: option.label
            }, index);
          })
        })]
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
        className: "form-group mb-3",
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("label", {
          className: "form-label",
          children: "Status upload"
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("select", {
          name: "status_upload",
          className: "form-select",
          onChange: onChange,
          value: form.status_upload,
          children: statusUpload.map(function (option, index) {
            return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("option", {
              value: option.value,
              children: option.label
            }, index);
          })
        })]
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
        className: "form-group mb-3",
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("label", {
          className: "form-label",
          children: "Status running"
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("select", {
          name: "status_running",
          className: "form-select",
          onChange: onChange,
          value: form.status_running,
          children: statusRunning.map(function (option, index) {
            return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("option", {
              value: option.value,
              children: option.label
            }, index);
          })
        })]
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
        className: "form-group mb-3",
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("label", {
          className: "form-label",
          children: "Status import"
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("select", {
          name: "status_import",
          className: "form-select",
          onChange: onChange,
          value: form.status_import,
          children: statusImport.map(function (option, index) {
            return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("option", {
              value: option.value,
              children: option.label
            }, index);
          })
        })]
      })]
    })]
  });
}

/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (/*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.memo(CardStatus));

/***/ }),

/***/ "./resources/js/react/components/ProjectForm/ModalDetailJob/index.jsx":
/*!****************************************************************************!*\
  !*** ./resources/js/react/components/ProjectForm/ModalDetailJob/index.jsx ***!
  \****************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "./node_modules/react/index.js");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! react/jsx-runtime */ "./node_modules/react/jsx-runtime.js");




function ModalDetailJob(_ref) {
  var _job$job_steps, _job$job_steps2;

  var onAdd = _ref.onAdd,
      onEdit = _ref.onEdit,
      onDelete = _ref.onDelete,
      onClose = _ref.onClose,
      job = _ref.job;
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
    className: "modal fade",
    id: "modalDetailJob",
    "data-coreui-backdrop": "static",
    "data-coreui-keyboard": "false",
    tabIndex: -1,
    "aria-labelledby": "modalDetailJobLabel",
    "aria-hidden": "true",
    children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
      className: "modal-dialog modal-lg",
      children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
        className: "modal-content",
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
          className: "modal-header",
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("h5", {
            className: "modal-title",
            id: "modalDetailJobLabel",
            children: "Detail Job"
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("button", {
            type: "button",
            className: "btn-close",
            "aria-label": "Close",
            onClick: onClose
          })]
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
          className: "modal-body",
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
            className: "container p-0 border border-1 mb-3",
            children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
              className: "row g-0",
              children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
                className: "col-12 col-sm-12 col-md-4 col-lg-3 p-2 border border-1 bg-light",
                children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("p", {
                  className: "fw-bold m-0",
                  children: "Nama Job"
                })
              }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
                className: "col-12 col-sm-12 col-md-8 col-lg-9 p-2 border border-1",
                children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("p", {
                  className: "m-0",
                  children: job === null || job === void 0 ? void 0 : job.job_name
                })
              }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
                className: "col-12 col-sm-12 col-md-4 col-lg-3 p-2 border border-1 bg-light",
                children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("p", {
                  className: "fw-bold m-0",
                  children: "Keterangan"
                })
              }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
                className: "col-12 col-sm-12 col-md-8 col-lg-9 p-2 border border-1",
                children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("p", {
                  className: "m-0",
                  children: job === null || job === void 0 ? void 0 : job.keterangan
                })
              })]
            })
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
            className: "form-group mb-3",
            children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("button", {
              className: "btn btn-primary btn-sm",
              type: "button",
              onClick: function onClick() {
                return onAdd(job);
              },
              children: "Tambah Job Step"
            })
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
            className: "table-responsive",
            children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("table", {
              className: "table table-bordered table-striped table-hover",
              children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("thead", {
                children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("tr", {
                  children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("th", {
                    children: "Nama Job Step"
                  }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("th", {
                    children: "Keterangan"
                  }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("th", {
                    width: 150,
                    children: "Aksi"
                  })]
                })
              }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("tbody", {
                className: "js-table-body-job-step",
                children: (job === null || job === void 0 ? void 0 : (_job$job_steps = job.job_steps) === null || _job$job_steps === void 0 ? void 0 : _job$job_steps.length) > 0 ? /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(react__WEBPACK_IMPORTED_MODULE_0__.Fragment, {
                  children: job === null || job === void 0 ? void 0 : (_job$job_steps2 = job.job_steps) === null || _job$job_steps2 === void 0 ? void 0 : _job$job_steps2.map(function (jobStep) {
                    return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("tr", {
                      children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("td", {
                        children: jobStep === null || jobStep === void 0 ? void 0 : jobStep.job_step_name
                      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("td", {
                        children: jobStep === null || jobStep === void 0 ? void 0 : jobStep.keterangan
                      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("td", {
                        className: "text-center",
                        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("button", {
                          className: "btn btn-primary btn-sm me-1",
                          type: "button",
                          onClick: function onClick() {
                            return onEdit(jobStep);
                          },
                          children: "Edit"
                        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("button", {
                          className: "btn btn-danger btn-sm",
                          type: "button",
                          onClick: function onClick() {
                            return onDelete(jobStep);
                          },
                          children: "Hapus"
                        })]
                      })]
                    });
                  })
                }) : /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("tr", {
                  children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("td", {
                    colSpan: 3,
                    className: "text-center",
                    children: "Tidak ada data"
                  })
                })
              })]
            })
          })]
        })]
      })
    })
  });
}

/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (/*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.memo(ModalDetailJob));

/***/ }),

/***/ "./resources/js/react/components/ProjectForm/ModalFormJobStep/index.jsx":
/*!******************************************************************************!*\
  !*** ./resources/js/react/components/ProjectForm/ModalFormJobStep/index.jsx ***!
  \******************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "./node_modules/react/index.js");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! react/jsx-runtime */ "./node_modules/react/jsx-runtime.js");




function ModalFormJobStep(_ref) {
  var form = _ref.form,
      onChange = _ref.onChange,
      onClose = _ref.onClose,
      onSubmit = _ref.onSubmit;
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
    className: "modal fade",
    id: "modalFormJobStep",
    "data-coreui-backdrop": "static",
    "data-coreui-keyboard": "false",
    tabIndex: -1,
    "aria-labelledby": "modalFormJobStepLabel",
    "aria-hidden": "true",
    children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
      className: "modal-dialog",
      children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
        className: "modal-content",
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
          className: "modal-header",
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("h5", {
            className: "modal-title",
            id: "modalFormJobStepLabel",
            children: "Form Job Step"
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("button", {
            type: "button",
            className: "btn-close",
            onClick: onClose,
            "aria-label": "Close"
          })]
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
          className: "modal-body",
          children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("form", {
            onSubmit: onSubmit,
            children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
              className: "form-group mb-3",
              children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("label", {
                className: "form-label",
                children: "Nama Job Step"
              }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("input", {
                name: "job_step_name",
                type: "text",
                className: "form-control",
                placeholder: "Nama job",
                onChange: onChange,
                value: form === null || form === void 0 ? void 0 : form.job_step_name
              })]
            }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
              className: "form-group mb-3",
              children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("label", {
                className: "form-label",
                children: "Keterangan"
              }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("textarea", {
                name: "keterangan",
                className: "form-control",
                placeholder: "tulis keterangan disini",
                onChange: onChange,
                value: form === null || form === void 0 ? void 0 : form.keterangan
              })]
            }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("button", {
              className: "btn btn-primary btn-sm",
              type: "submit",
              children: "Simpan"
            })]
          })
        })]
      })
    })
  });
}

/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (/*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.memo(ModalFormJobStep));

/***/ }),

/***/ "./resources/js/react/components/ProjectForm/ModalFormJob/index.jsx":
/*!**************************************************************************!*\
  !*** ./resources/js/react/components/ProjectForm/ModalFormJob/index.jsx ***!
  \**************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "./node_modules/react/index.js");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! react/jsx-runtime */ "./node_modules/react/jsx-runtime.js");




function ModalFormJob(_ref) {
  var form = _ref.form,
      onChange = _ref.onChange,
      onClose = _ref.onClose,
      onSubmit = _ref.onSubmit;
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
    className: "modal fade",
    id: "modalFormJob",
    "data-coreui-backdrop": "static",
    "data-coreui-keyboard": "false",
    tabIndex: -1,
    "aria-labelledby": "modalFormJobLabel",
    "aria-hidden": "true",
    children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
      className: "modal-dialog",
      children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
        className: "modal-content",
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
          className: "modal-header",
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("h5", {
            className: "modal-title",
            id: "modalFormJobLabel",
            children: "Form Job"
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("button", {
            type: "button",
            className: "btn-close",
            onClick: onClose,
            "aria-label": "Close"
          })]
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
          className: "modal-body",
          children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("form", {
            onSubmit: onSubmit,
            children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
              className: "form-group mb-3",
              children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("label", {
                className: "form-label",
                children: "Nama Job"
              }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("input", {
                name: "job_name",
                type: "text",
                className: "form-control",
                placeholder: "Nama job",
                onChange: onChange,
                value: form === null || form === void 0 ? void 0 : form.job_name
              })]
            }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
              className: "form-group mb-3",
              children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("label", {
                className: "form-label",
                children: "Keterangan"
              }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("textarea", {
                name: "keterangan",
                className: "form-control",
                placeholder: "tulis keterangan disini",
                onChange: onChange,
                value: form === null || form === void 0 ? void 0 : form.keterangan
              })]
            }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("button", {
              className: "btn btn-primary btn-sm",
              type: "submit",
              children: "Simpan"
            })]
          })
        })]
      })
    })
  });
}

;
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (/*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.memo(ModalFormJob));

/***/ }),

/***/ "./resources/js/react/components/ProjectForm/index.jsx":
/*!*************************************************************!*\
  !*** ./resources/js/react/components/ProjectForm/index.jsx ***!
  \*************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "./node_modules/react/index.js");
/* harmony import */ var uuid__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! uuid */ "./node_modules/uuid/dist/esm-browser/v4.js");
/* harmony import */ var _CardProjectName__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./CardProjectName */ "./resources/js/react/components/ProjectForm/CardProjectName/index.jsx");
/* harmony import */ var _CardStatus__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./CardStatus */ "./resources/js/react/components/ProjectForm/CardStatus/index.jsx");
/* harmony import */ var _CardJobTable__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./CardJobTable */ "./resources/js/react/components/ProjectForm/CardJobTable/index.jsx");
/* harmony import */ var _CardPathSSIS__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./CardPathSSIS */ "./resources/js/react/components/ProjectForm/CardPathSSIS/index.jsx");
/* harmony import */ var _CardSimpan__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./CardSimpan */ "./resources/js/react/components/ProjectForm/CardSimpan/index.jsx");
/* harmony import */ var _CardKeterangan__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ./CardKeterangan */ "./resources/js/react/components/ProjectForm/CardKeterangan/index.jsx");
/* harmony import */ var _ModalDetailJob__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ./ModalDetailJob */ "./resources/js/react/components/ProjectForm/ModalDetailJob/index.jsx");
/* harmony import */ var _ModalFormJob__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! ./ModalFormJob */ "./resources/js/react/components/ProjectForm/ModalFormJob/index.jsx");
/* harmony import */ var _ModalFormJobStep__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! ./ModalFormJobStep */ "./resources/js/react/components/ProjectForm/ModalFormJobStep/index.jsx");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! react/jsx-runtime */ "./node_modules/react/jsx-runtime.js");
function _toConsumableArray(arr) { return _arrayWithoutHoles(arr) || _iterableToArray(arr) || _unsupportedIterableToArray(arr) || _nonIterableSpread(); }

function _nonIterableSpread() { throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); }

function _iterableToArray(iter) { if (typeof Symbol !== "undefined" && iter[Symbol.iterator] != null || iter["@@iterator"] != null) return Array.from(iter); }

function _arrayWithoutHoles(arr) { if (Array.isArray(arr)) return _arrayLikeToArray(arr); }

function ownKeys(object, enumerableOnly) { var keys = Object.keys(object); if (Object.getOwnPropertySymbols) { var symbols = Object.getOwnPropertySymbols(object); if (enumerableOnly) { symbols = symbols.filter(function (sym) { return Object.getOwnPropertyDescriptor(object, sym).enumerable; }); } keys.push.apply(keys, symbols); } return keys; }

function _objectSpread(target) { for (var i = 1; i < arguments.length; i++) { var source = arguments[i] != null ? arguments[i] : {}; if (i % 2) { ownKeys(Object(source), true).forEach(function (key) { _defineProperty(target, key, source[key]); }); } else if (Object.getOwnPropertyDescriptors) { Object.defineProperties(target, Object.getOwnPropertyDescriptors(source)); } else { ownKeys(Object(source)).forEach(function (key) { Object.defineProperty(target, key, Object.getOwnPropertyDescriptor(source, key)); }); } } return target; }

function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }

function _slicedToArray(arr, i) { return _arrayWithHoles(arr) || _iterableToArrayLimit(arr, i) || _unsupportedIterableToArray(arr, i) || _nonIterableRest(); }

function _nonIterableRest() { throw new TypeError("Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); }

function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }

function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) { arr2[i] = arr[i]; } return arr2; }

function _iterableToArrayLimit(arr, i) { var _i = arr == null ? null : typeof Symbol !== "undefined" && arr[Symbol.iterator] || arr["@@iterator"]; if (_i == null) return; var _arr = []; var _n = true; var _d = false; var _s, _e; try { for (_i = _i.call(arr); !(_n = (_s = _i.next()).done); _n = true) { _arr.push(_s.value); if (i && _arr.length === i) break; } } catch (err) { _d = true; _e = err; } finally { try { if (!_n && _i["return"] != null) _i["return"](); } finally { if (_d) throw _e; } } return _arr; }

function _arrayWithHoles(arr) { if (Array.isArray(arr)) return arr; }











 // set form



var initialFormProject = {
  package_id: "",
  project_name: "",
  status_migrasi: "",
  staging: "",
  status_upload: "",
  status_running: "",
  status_import: "",
  original_path: "",
  keterangan: "",
  jobs: []
};
var initialFormJob = {
  id: "",
  job_name: "",
  keterangan: "",
  job_steps: []
};
var initialFormJobStep = {
  id: "",
  job_step_name: "",
  keterangan: ""
};
var modalObject = {
  modalFormJob: null,
  modalFormJobStep: null,
  modalDetailJob: null
};

function ProjectForm(_ref) {
  var packageId = _ref.packageId;

  var _useState = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)(false),
      _useState2 = _slicedToArray(_useState, 2),
      loading = _useState2[0],
      setLoading = _useState2[1];

  var _useState3 = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)(initialFormProject),
      _useState4 = _slicedToArray(_useState3, 2),
      formProject = _useState4[0],
      setFormProject = _useState4[1];

  var _useState5 = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)(initialFormJob),
      _useState6 = _slicedToArray(_useState5, 2),
      formJob = _useState6[0],
      setFormJob = _useState6[1];

  var _useState7 = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)(initialFormJobStep),
      _useState8 = _slicedToArray(_useState7, 2),
      formJobStep = _useState8[0],
      setFormJobStep = _useState8[1];

  var _useState9 = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)(null),
      _useState10 = _slicedToArray(_useState9, 2),
      selectedJob = _useState10[0],
      setSelectedJob = _useState10[1];

  var detailJob = formProject.jobs.filter(function (v) {
    return (v === null || v === void 0 ? void 0 : v.id) === selectedJob;
  })[0];
  console.log('formProject', formProject);

  function modal(id) {
    var element = document.getElementById(id);

    if (!element) {
      throw new Error('Modal not found');
    }

    if (!coreui) {
      throw new Error('CoreUI not installed');
    }

    if (modalObject[id]) {
      return modalObject[id];
    } else {
      var _modal = new coreui.Modal(element);

      if (!_modal) {
        throw new Error('Modal not found');
      }

      modalObject[id] = _modal;
      return modalObject[id];
    }
  }

  function modalFormJob() {
    return modal('modalFormJob');
  }

  function modalFormJobStep() {
    return modal('modalFormJobStep');
  }

  function modalDetailJob() {
    return modal('modalDetailJob');
  }

  function onChangeForm(value, field, setState) {
    setState(function (prev) {
      return _objectSpread(_objectSpread({}, prev), {}, _defineProperty({}, field, value));
    });
  }

  function onChangeFormProject(event) {
    var value = event.target.value;
    var field = event.target.name;
    onChangeForm(value, field, setFormProject);
  }

  function onChangeFormJob(event) {
    var value = event.target.value;
    var field = event.target.name;
    onChangeForm(value, field, setFormJob);
  }

  function onChangeFormJobStep(event) {
    var value = event.target.value;
    var field = event.target.name;
    onChangeForm(value, field, setFormJobStep);
  }

  function onAddJob() {
    modalFormJob().show();
  }

  function onEditJob(job) {
    setFormJob({
      id: job === null || job === void 0 ? void 0 : job.id,
      job_name: job === null || job === void 0 ? void 0 : job.job_name,
      keterangan: job === null || job === void 0 ? void 0 : job.keterangan,
      job_steps: (job === null || job === void 0 ? void 0 : job.job_steps) || []
    });
    modalFormJob().show();
  }

  function onDeleteJob(job) {
    var isConfirm = window.confirm('Yakin ingin menghapus job?');

    if (isConfirm) {
      var jobs = _toConsumableArray(formProject.jobs);

      if (job !== null && job !== void 0 && job.id) {
        jobs = jobs.filter(function (val) {
          return (val === null || val === void 0 ? void 0 : val.id) !== job.id;
        });
        onChangeForm(jobs, 'jobs', setFormProject);
      }
    }
  }

  function onDetailJob(job) {
    if (job !== null && job !== void 0 && job.id) {
      setSelectedJob(job === null || job === void 0 ? void 0 : job.id);
      modalDetailJob().show();
    }
  }

  function onCloseFormJobStep() {
    setFormJobStep(initialFormJobStep);
    modalFormJobStep().hide();
  }

  function onAddJobStep() {
    modalFormJobStep().show();
  }

  function onEditJobStep(jobStep) {
    setFormJobStep({
      id: jobStep === null || jobStep === void 0 ? void 0 : jobStep.id,
      job_step_name: jobStep === null || jobStep === void 0 ? void 0 : jobStep.job_step_name,
      keterangan: jobStep === null || jobStep === void 0 ? void 0 : jobStep.keterangan
    });
    modalFormJobStep().show();
  }

  function onSubmitFormJobStep(e) {
    var _e$preventDefault;

    e === null || e === void 0 ? void 0 : (_e$preventDefault = e.preventDefault) === null || _e$preventDefault === void 0 ? void 0 : _e$preventDefault.call(e);

    if (detailJob) {
      var jobs = _toConsumableArray(formProject.jobs);

      var job = _objectSpread({}, detailJob);

      var jobSteps = _toConsumableArray(detailJob.job_steps);

      var form = _objectSpread({}, formJobStep);

      if (!(form !== null && form !== void 0 && form.job_step_name)) {
        return window.alert('Nama Job Step Harus diisi!');
      }

      if (form !== null && form !== void 0 && form.id) {
        jobSteps = jobSteps.map(function (v) {
          if ((v === null || v === void 0 ? void 0 : v.id) === (form === null || form === void 0 ? void 0 : form.id)) {
            return form;
          }

          return v;
        });
      } else {
        form.id = (0,uuid__WEBPACK_IMPORTED_MODULE_11__["default"])();
        jobSteps.push(form);
      }

      job.job_steps = jobSteps;
      jobs = jobs.map(function (v) {
        if (v && job !== null && job !== void 0 && job.id && (job === null || job === void 0 ? void 0 : job.id) === (v === null || v === void 0 ? void 0 : v.id)) {
          return job;
        }

        return v;
      });
      onChangeForm(jobs, 'jobs', setFormProject);
      onCloseFormJobStep();
    }
  }

  function onDeleteJobStep(jobStep) {
    var confirm = window.confirm('Yakin ingin menghapus Job Step?');

    if (confirm) {
      var jobs = _toConsumableArray(formProject.jobs);

      var job = _objectSpread({}, detailJob);

      var jobSteps = _toConsumableArray(job.job_steps);

      jobSteps = jobSteps.filter(function (v) {
        return (v === null || v === void 0 ? void 0 : v.id) !== jobStep.id;
      });
      job.job_steps = jobSteps;
      jobs = jobs.map(function (v) {
        if ((v === null || v === void 0 ? void 0 : v.id) === job.id) {
          return job;
        }

        return v;
      });
      onChangeForm(jobs, 'jobs', setFormProject);
    }
  }

  function onCloseFormJob() {
    modalFormJob().hide();
    setFormJob(initialFormJob);
  }

  function onCloseDetailJob() {
    setSelectedJob(null);
    modalDetailJob().hide();
  }

  function handleSimpanJob(e) {
    var _e$preventDefault2;

    e === null || e === void 0 ? void 0 : (_e$preventDefault2 = e.preventDefault) === null || _e$preventDefault2 === void 0 ? void 0 : _e$preventDefault2.call(e);

    var form = _objectSpread({}, formJob);

    var jobs = _toConsumableArray(formProject.jobs);

    if (!formJob.job_name) {
      return window.alert('Nama Job harus diisi');
    }

    if (form !== null && form !== void 0 && form.id) {
      // is edit logic
      jobs = jobs.map(function (job) {
        if (job !== null && job !== void 0 && job.id && (job === null || job === void 0 ? void 0 : job.id) === (form === null || form === void 0 ? void 0 : form.id)) {
          return form;
        }

        return job;
      });
    } else {
      form.id = (0,uuid__WEBPACK_IMPORTED_MODULE_11__["default"])();
      jobs.push(form);
    }

    onChangeForm(jobs, 'jobs', setFormProject);
    onCloseFormJob();
  }

  function onSubmitForm(e) {
    var _e$preventDefault3;

    e === null || e === void 0 ? void 0 : (_e$preventDefault3 = e.preventDefault) === null || _e$preventDefault3 === void 0 ? void 0 : _e$preventDefault3.call(e);

    var form = _objectSpread({}, formProject);

    if (!form.project_name) {
      return window.alert('Nama project harus diisi!');
    }

    if (form.jobs.length === 0) {
      return window.alert('Job harus diisi!');
    }

    console.log('simpan', form);
  }

  (0,react__WEBPACK_IMPORTED_MODULE_0__.useEffect)(function () {}, []);
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_10__.jsxs)(react__WEBPACK_IMPORTED_MODULE_0__.Fragment, {
    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_10__.jsx)("div", {
      className: "container-lg",
      children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_10__.jsxs)("div", {
        className: "row",
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_10__.jsxs)("div", {
          className: "col-12 col-sm-12 col-md-12 col-lg-4",
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_10__.jsx)(_CardProjectName__WEBPACK_IMPORTED_MODULE_1__["default"], {
            onChange: onChangeFormProject,
            form: formProject
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_10__.jsx)(_CardStatus__WEBPACK_IMPORTED_MODULE_2__["default"], {
            onChange: onChangeFormProject,
            form: formProject
          })]
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_10__.jsxs)("div", {
          className: "col-12 col-sm-12 col-md-12 col-lg-8",
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_10__.jsx)(_CardJobTable__WEBPACK_IMPORTED_MODULE_3__["default"], {
            jobs: formProject.jobs,
            onAdd: onAddJob,
            onEdit: onEditJob,
            onDelete: onDeleteJob,
            onDetail: onDetailJob
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_10__.jsx)(_CardPathSSIS__WEBPACK_IMPORTED_MODULE_4__["default"], {
            onChange: onChangeFormProject,
            form: formProject
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_10__.jsx)(_CardKeterangan__WEBPACK_IMPORTED_MODULE_6__["default"], {
            onChange: onChangeFormProject,
            form: formProject
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_10__.jsx)(_CardSimpan__WEBPACK_IMPORTED_MODULE_5__["default"], {
            onSubmit: onSubmitForm
          })]
        })]
      })
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_10__.jsx)(_ModalFormJob__WEBPACK_IMPORTED_MODULE_8__["default"], {
      form: formJob,
      onChange: onChangeFormJob,
      onClose: onCloseFormJob,
      onSubmit: handleSimpanJob
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_10__.jsx)(_ModalDetailJob__WEBPACK_IMPORTED_MODULE_7__["default"], {
      job: detailJob,
      onClose: onCloseDetailJob,
      onAdd: onAddJobStep,
      onEdit: onEditJobStep,
      onDelete: onDeleteJobStep
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_10__.jsx)(_ModalFormJobStep__WEBPACK_IMPORTED_MODULE_9__["default"], {
      form: formJobStep,
      onClose: onCloseFormJobStep,
      onChange: onChangeFormJobStep,
      onSubmit: onSubmitFormJobStep
    })]
  });
}

/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (ProjectForm);

/***/ }),

/***/ "./node_modules/uuid/dist/esm-browser/regex.js":
/*!*****************************************************!*\
  !*** ./node_modules/uuid/dist/esm-browser/regex.js ***!
  \*****************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (/^(?:[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}|00000000-0000-0000-0000-000000000000)$/i);

/***/ }),

/***/ "./node_modules/uuid/dist/esm-browser/rng.js":
/*!***************************************************!*\
  !*** ./node_modules/uuid/dist/esm-browser/rng.js ***!
  \***************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ rng)
/* harmony export */ });
// Unique ID creation requires a high quality random # generator. In the browser we therefore
// require the crypto API and do not support built-in fallback to lower quality random number
// generators (like Math.random()).
var getRandomValues;
var rnds8 = new Uint8Array(16);
function rng() {
  // lazy load so that environments that need to polyfill have a chance to do so
  if (!getRandomValues) {
    // getRandomValues needs to be invoked in a context where "this" is a Crypto implementation. Also,
    // find the complete implementation of crypto (msCrypto) on IE11.
    getRandomValues = typeof crypto !== 'undefined' && crypto.getRandomValues && crypto.getRandomValues.bind(crypto) || typeof msCrypto !== 'undefined' && typeof msCrypto.getRandomValues === 'function' && msCrypto.getRandomValues.bind(msCrypto);

    if (!getRandomValues) {
      throw new Error('crypto.getRandomValues() not supported. See https://github.com/uuidjs/uuid#getrandomvalues-not-supported');
    }
  }

  return getRandomValues(rnds8);
}

/***/ }),

/***/ "./node_modules/uuid/dist/esm-browser/stringify.js":
/*!*********************************************************!*\
  !*** ./node_modules/uuid/dist/esm-browser/stringify.js ***!
  \*********************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _validate_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./validate.js */ "./node_modules/uuid/dist/esm-browser/validate.js");

/**
 * Convert array of 16 byte values to UUID string format of the form:
 * XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX
 */

var byteToHex = [];

for (var i = 0; i < 256; ++i) {
  byteToHex.push((i + 0x100).toString(16).substr(1));
}

function stringify(arr) {
  var offset = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : 0;
  // Note: Be careful editing this code!  It's been tuned for performance
  // and works in ways you may not expect. See https://github.com/uuidjs/uuid/pull/434
  var uuid = (byteToHex[arr[offset + 0]] + byteToHex[arr[offset + 1]] + byteToHex[arr[offset + 2]] + byteToHex[arr[offset + 3]] + '-' + byteToHex[arr[offset + 4]] + byteToHex[arr[offset + 5]] + '-' + byteToHex[arr[offset + 6]] + byteToHex[arr[offset + 7]] + '-' + byteToHex[arr[offset + 8]] + byteToHex[arr[offset + 9]] + '-' + byteToHex[arr[offset + 10]] + byteToHex[arr[offset + 11]] + byteToHex[arr[offset + 12]] + byteToHex[arr[offset + 13]] + byteToHex[arr[offset + 14]] + byteToHex[arr[offset + 15]]).toLowerCase(); // Consistency check for valid UUID.  If this throws, it's likely due to one
  // of the following:
  // - One or more input array values don't map to a hex octet (leading to
  // "undefined" in the uuid)
  // - Invalid input values for the RFC `version` or `variant` fields

  if (!(0,_validate_js__WEBPACK_IMPORTED_MODULE_0__["default"])(uuid)) {
    throw TypeError('Stringified UUID is invalid');
  }

  return uuid;
}

/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (stringify);

/***/ }),

/***/ "./node_modules/uuid/dist/esm-browser/v4.js":
/*!**************************************************!*\
  !*** ./node_modules/uuid/dist/esm-browser/v4.js ***!
  \**************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _rng_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./rng.js */ "./node_modules/uuid/dist/esm-browser/rng.js");
/* harmony import */ var _stringify_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./stringify.js */ "./node_modules/uuid/dist/esm-browser/stringify.js");



function v4(options, buf, offset) {
  options = options || {};
  var rnds = options.random || (options.rng || _rng_js__WEBPACK_IMPORTED_MODULE_0__["default"])(); // Per 4.4, set bits for version and `clock_seq_hi_and_reserved`

  rnds[6] = rnds[6] & 0x0f | 0x40;
  rnds[8] = rnds[8] & 0x3f | 0x80; // Copy bytes to buffer, if provided

  if (buf) {
    offset = offset || 0;

    for (var i = 0; i < 16; ++i) {
      buf[offset + i] = rnds[i];
    }

    return buf;
  }

  return (0,_stringify_js__WEBPACK_IMPORTED_MODULE_1__["default"])(rnds);
}

/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (v4);

/***/ }),

/***/ "./node_modules/uuid/dist/esm-browser/validate.js":
/*!********************************************************!*\
  !*** ./node_modules/uuid/dist/esm-browser/validate.js ***!
  \********************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _regex_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./regex.js */ "./node_modules/uuid/dist/esm-browser/regex.js");


function validate(uuid) {
  return typeof uuid === 'string' && _regex_js__WEBPACK_IMPORTED_MODULE_0__["default"].test(uuid);
}

/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (validate);

/***/ })

}]);