"use strict";
(self["webpackChunk"] = self["webpackChunk"] || []).push([["resources_js_react_components_ProjectForm_CardStatus_index_jsx"],{

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

/***/ })

}]);