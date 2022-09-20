https://www.redhat.com/en/topics/devops/what-cicd-pipeline

Overview
A CI/CD pipeline is a series of steps that must be performed in order to deliver a new version of software. Continuous integration/continuous delivery (CI/CD) pipelines are a practice focused on improving software delivery using either a DevOps or site reliability engineering (SRE) approach.

A CI/CD pipeline introduces monitoring and automation to improve the process of application development, particularly at the integration and testing phases, as well as during delivery and deployment. Although it is possible to manually execute each of the steps of a CI/CD pipeline, the true value of CI/CD pipelines is realized through automation.


Elements of a CI/CD pipeline
The steps that form a CI/CD pipeline are distinct subsets of tasks grouped into what is known as a pipeline stage. Typical pipeline stages include:

Build - The stage where the application is compiled.
Test - The stage where code is tested. Automation here can save both time and effort.
Release - The stage where the application is delivered to the repository.
Deploy - In this stage code is deployed to production.
Validation and compliance - The steps to validate a build are determined by the needs of your organization. Image security scanning tools, like Clair, can ensure the quality of images by comparing them to known vulnerabilities (CVEs).



Traditional CI/CD systems are designed for pipelines that use virtual machines, but cloud-native app dev brings advantages to CI/CD pipelines. What does a CI/CD pipeline with containers look like?