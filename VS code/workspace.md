# What is a VS Code "workspace"?

A Visual Studio Code "workspace" is the collection of one or more folders that are opened in a VS Code window (instance). In most cases, you will have a single folder opened as the workspace but, depending on your development workflow, you can include more than one folder, using an advanced configuration called Multi-root workspaces.

The concept of a workspace enables VS Code to:

Configure settings that only apply to a specific folder or folders but not others.
Persist task and debugger launch configurations that are only valid in the context of that workspace.
Store and restore UI state associated with that workspace (for example, the files that are opened).
Selectively enable or disable extensions only for that workspace.
You may see the terms "folder" and "workspace" used interchangeably in VS Code documentation, issues, and community discussions. Think of a workspace as the root of a project that has extra VS Code knowledge and capabilities.

Note: It is also possible to open VS Code without a workspace. For example, when you open a new VS Code window by selecting a file from your platform's File menu, you will not be inside a workspace. In this mode, some of VS Code's capabilities are reduced but you can still open text files and edit them.

vss created workspace 