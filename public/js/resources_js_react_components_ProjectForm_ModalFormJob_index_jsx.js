"use strict";
(self["webpackChunk"] = self["webpackChunk"] || []).push([["resources_js_react_components_ProjectForm_ModalFormJob_index_jsx"],{

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



var ModalFormJob = /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.forwardRef(function (_ref, ref) {
  var onChange = _ref.onChange;
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
    ref: ref,
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
            "data-coreui-dismiss": "modal",
            "aria-label": "Close"
          })]
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
          className: "modal-body",
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
              onChange: onChange
            })]
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
            className: "form-group mb-3",
            children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("label", {
              className: "form-label",
              children: "Keterangan"
            }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("textarea", {
              name: "job_keterangan",
              className: "form-control",
              placeholder: "tulis keterangan disini",
              onChange: onChange
            })]
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("button", {
            className: "btn btn-primary btn-sm js-simpan-job",
            type: "button",
            children: "Simpan"
          })]
        })]
      })
    })
  });
});
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (/*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.memo(ModalFormJob));

/***/ })

}]);