jbuilder

https://github.com/rails/jbuilder

http://geekhmer.github.io/blog/2015/04/29/ruby-on-rails-getting-started-with-jbuilder/


# builder view directly
rails g controller products index

http://127.0.0.1:16888/api/v1/jobsdaysum.json

json.jobs  @jobsum do |job|
    json.date job.date
    json.count job.count

    jobslist=Job.all.order(id: :desc).where("date= ?", job.date)
    json.detail jobslist do |job|
        json.date job.date
        json.title job.title
        json.company job.company
        json.place job.place
       # json.link job.link
        #json.skills job.required_skills
    end    
end

json.jobs  @jobsum do |job|
    json.date job.date
    json.count job.count

    jobslist=Job.all.order(id: :desc).where("date= ?", job.date)
    json.detail jobslist do |job|
        json.date job.date
        json.title job.title
        json.company job.company
        json.place job.place
       # json.link job.link
        #json.skills job.required_skills
    end    
end

