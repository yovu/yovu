class App < Sinatra::Base
  
    register Sinatra::AssetPack
  
    assets do
        serve '/js', :from => 'assets/javascripts'
        js :application, [
            '/js/jquery-1.10.2.min.js',
            '/js/bootstrap.js',
            '/js/jquery.mixitup.min.js',
            '/js/jquery.parallax-1.1.3.js',
            '/js/jquery.tweet.min.js',
            '/js/jquery.bxslider.min.js',
            '/js/jquery.responsivevideos.js',
            '/js/jquery.centralized.js',
            '/js/jquery.hashloader.js',
            '/js/jquery.fixedonlater.js',
            '/js/jquery.nav.js',
            '/js/jquery.scrollTo.js',
            '/js/application.js'
        ]
      
        js :shim, [
            '/js/html5shiv.js'
        ]
    
        serve '/css', :from => 'assets/stylesheets'
        css :application, [
            '/css/*.css'
        ]
       
        serve '/images', from: 'assets/images'

        serve '/fonts', from: 'assets/fonts'
    
        js_compression :jsmin
        css_compression :sass
    end
  
    get '/' do
        erb :home
    end

    get '/portfolio/more' do
        erb :'portfolio/more', :layout => false
    end

    get '/portfolio/project/:project_id' do
        @project = params[:project_id]
        erb :'portfolio/project', :layout => false
    end

    get '/test' do
        erb :'portfolio/test', :layout => false
    end

end