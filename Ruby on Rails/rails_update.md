params = ActionController::Parameters.new(check_count: 9)
params.permit!
@jobs.update params