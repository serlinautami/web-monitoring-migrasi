import React from 'react';


import ReactDOM from 'react-dom';
const ProjectForm = React.lazy(() => import('../components/ProjectForm'));

const element = document.getElementById("project-form");
if (element) {
  const packageId = element.getAttribute('data-package-id');
  const projectId = element.getAttribute('data-project-id');
  ReactDOM.render(
    <React.StrictMode>
      <React.Suspense fallback={<div>Sedang Memuat...</div>}>
        <ProjectForm packageId={packageId} projectId={projectId} />
      </React.Suspense>
    </React.StrictMode>, element);
}