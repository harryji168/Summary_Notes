. Now clear the journal logs by choosing one of following commands:
Delete journal logs older than X days: sudo journalctl --vacuum-time=2days
Delete log files until the disk space taken falls below the specified size: sudo journalctl --vacuum-size=100M