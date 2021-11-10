# open chrome  chrome://tracing/


 Chrome Tracing lets you record a much wider array of performance-relevant data about the browser, so it can be helpful when tracking down a performance issue that isn’t strictly JavaScript-related; for instance, GPU issues or cases where one process is waiting on another process. As an example, in Electron apps, a common source of performance issues is over-eager communication (especially synchronous IPC) between the main and renderer processes.