import React, { useState, useEffect, useCallback, Suspense } from "react";
import { v4 as uuid } from 'uuid';
import CardProjectName from './CardProjectName';
import CardStatus from './CardStatus';
import CardJobTable from './CardJobTable';
import CardPathSSIS from './CardPathSSIS';
import CardSimpan from './CardSimpan';
import CardKeterangan from './CardKeterangan';
import ModalDetailJob from './ModalDetailJob';
import ModalFormJob from './ModalFormJob';
import ModalFormJobStep from './ModalFormJobStep';


// set form
const initialFormProject = {
  package_id: "",
  project_name: "",
  status_migrasi: "",
  staging: "",
  status_upload: "",
  status_running: "",
  status_import: "",
  original_path: "",
  keterangan: "",
  jobs: [],
};

const initialFormJob = {
  id: "",
  job_name: "",
  keterangan: "",
  job_steps: [],
};

const initialFormJobStep = {
  id: "",
  job_step_name: "",
  keterangan: "",
};

let modalObject = {
  modalFormJob: null,
  modalFormJobStep: null,
  modalDetailJob: null
}

function ProjectForm({ packageId }) {


  const [loading, setLoading] = useState(false);
  const [formProject, setFormProject] = useState(initialFormProject);
  const [formJob, setFormJob] = useState(initialFormJob);
  const [formJobStep, setFormJobStep] = useState(initialFormJobStep);

  const [selectedJob, setSelectedJob] = useState(null);
  const detailJob = formProject.jobs.filter(v => v?.id === selectedJob)[0];


  console.log('formProject', formProject)

  function modal(id) {
    const element = document.getElementById(id);

    if (!element) {
      throw new Error('Modal not found');
    }

    if (!coreui) {
      throw new Error('CoreUI not installed');
    }

    if (modalObject[id]) {
      return modalObject[id];
    } else {
      const modal = new coreui.Modal(element);
      if (!modal) {
        throw new Error('Modal not found');
      }
      modalObject[id] = modal;
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
      return {
        ...prev,
        [field]: value,
      };
    });
  }

  function onChangeFormProject(event) {
    const value = event.target.value;
    const field = event.target.name;
    onChangeForm(value, field, setFormProject);
  }

  function onChangeFormJob(event) {
    const value = event.target.value;
    const field = event.target.name;
    onChangeForm(value, field, setFormJob);
  }

  function onChangeFormJobStep(event) {
    const value = event.target.value;
    const field = event.target.name;
    onChangeForm(value, field, setFormJobStep);
  }

  function onAddJob() {
    modalFormJob().show();
  }

  function onEditJob(job) {
    setFormJob({
      id: job?.id,
      job_name: job?.job_name,
      keterangan: job?.keterangan,
      job_steps: job?.job_steps || []
    });
    modalFormJob().show();
  }

  function onDeleteJob(job) {
    const isConfirm = window.confirm('Yakin ingin menghapus job?');
    if (isConfirm) {
      let jobs = [...formProject.jobs];
      if (job?.id) {
        jobs = jobs.filter(val => val?.id !== job.id);
        onChangeForm(jobs, 'jobs', setFormProject);
      }
    }
  }

  function onDetailJob(job) {
    if (job?.id) {
      setSelectedJob(job?.id);
      modalDetailJob().show()
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
      id: jobStep?.id,
      job_step_name: jobStep?.job_step_name,
      keterangan: jobStep?.keterangan
    })
    modalFormJobStep().show();
  }

  function onSubmitFormJobStep(e) {
    e?.preventDefault?.();
    if (detailJob) {
      let jobs = [...formProject.jobs];
      let job = { ...detailJob };
      let jobSteps = [...detailJob.job_steps];
      let form = { ...formJobStep };

      if (!form?.job_step_name) {
        return window.alert('Nama Job Step Harus diisi!');
      }

      if (form?.id) {
        jobSteps = jobSteps.map(function (v) {
          if (v?.id === form?.id) {
            return form;
          }
          return v
        });
      } else {
        form.id = uuid();
        jobSteps.push(form);
      }

      job.job_steps = jobSteps;


      jobs = jobs.map(v => {
        if (v && job?.id && job?.id === v?.id) {
          return job;
        }
        return v
      })

      onChangeForm(jobs, 'jobs', setFormProject);
      onCloseFormJobStep();
    }
  }

  function onDeleteJobStep(jobStep) {
    const confirm = window.confirm('Yakin ingin menghapus Job Step?');

    if (confirm) {
      let jobs = [...formProject.jobs];
      let job = { ...detailJob }
      let jobSteps = [...job.job_steps];

      jobSteps = jobSteps.filter(v => v?.id !== jobStep.id);
      job.job_steps = jobSteps;

      jobs = jobs.map(v => {
        if (v?.id === job.id) {
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
    e?.preventDefault?.();
    const form = { ...formJob };
    let jobs = [...formProject.jobs];

    if (!formJob.job_name) {
      return window.alert('Nama Job harus diisi');
    }

    if (form?.id) {
      // is edit logic
      jobs = jobs.map(function (job) {
        if (job?.id && job?.id === form?.id) {
          return form;
        }
        return job
      });
    } else {
      form.id = uuid();
      jobs.push(form);
    }
    onChangeForm(jobs, 'jobs', setFormProject);
    onCloseFormJob();
  }

  function onSubmitForm(e) {
    e?.preventDefault?.();
    const form = { ...formProject }

    if (!form.project_name) {
      return window.alert('Nama project harus diisi!');
    }

    if (form.jobs.length === 0) {
      return window.alert('Job harus diisi!');
    }

    console.log('simpan', form);

  }


  useEffect(() => {
  }, []);

  return (
    <React.Fragment>
      <div className="container-lg">
        <div className="row">
          <div className="col-12 col-sm-12 col-md-12 col-lg-4">
            <CardProjectName
              onChange={onChangeFormProject}
              form={formProject}
            />

            <CardStatus
              onChange={onChangeFormProject}
              form={formProject}
            />
          </div>

          <div className="col-12 col-sm-12 col-md-12 col-lg-8">
            <CardJobTable
              jobs={formProject.jobs}
              onAdd={onAddJob}
              onEdit={onEditJob}
              onDelete={onDeleteJob}
              onDetail={onDetailJob}
            />
            <CardPathSSIS
              onChange={onChangeFormProject}
              form={formProject}
            />
            <CardKeterangan
              onChange={onChangeFormProject}
              form={formProject}
            />
            <CardSimpan onSubmit={onSubmitForm} />
          </div>
        </div>
      </div>

      <ModalFormJob
        form={formJob}
        onChange={onChangeFormJob}
        onClose={onCloseFormJob}
        onSubmit={handleSimpanJob}
      />
      <ModalDetailJob
        job={detailJob}
        onClose={onCloseDetailJob}
        onAdd={onAddJobStep}
        onEdit={onEditJobStep}
        onDelete={onDeleteJobStep}
      />
      <ModalFormJobStep
        form={formJobStep}
        onClose={onCloseFormJobStep}
        onChange={onChangeFormJobStep}
        onSubmit={onSubmitFormJobStep}
      />
    </React.Fragment>
  );
}

export default ProjectForm;
