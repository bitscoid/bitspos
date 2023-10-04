const mixins = {
    methods: {
      // Method "hasAnyPermission"
      hasAnyPermission: function (permissions) {
  
        // Get permissions from props
        let allPermissions = this.$page.props.auth.permissions;
  
        let hasPermission = false;
        permissions.forEach(function(item){
          if(allPermissions[item]) hasPermission = true;     
        });
  
        return hasPermission;
      }
    },
  };
  
  export { mixins };