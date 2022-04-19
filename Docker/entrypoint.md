https://www.bmc.com/blogs/docker-cmd-vs-entrypoint/



The images, on the other hand, are run by executing Docker instructions through a Dockerfile. There are three types of instructions (commands) that you use to build and run Dockerfiles:

# RUN
 Mainly used to build images and install applications and packages. Builds a new layer over an existing image by committing the results.
# CMD
 Sets default parameters that can be overridden from the Docker Command Line Interface (CLI) when a container is running.
# entrypoint
. Default parameters that cannot be overridden when Docker Containers run with CLI parameters.
