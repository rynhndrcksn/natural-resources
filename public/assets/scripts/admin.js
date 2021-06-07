$(document).ready(function () {
    $("acceptedApplications").click(function () {
        $("acceptedApplicationsTable").css( {
            'display': 'block'
        });

        $("waitlistedApplicationsTable").css( {
            'display': 'none'
        })

        $("rejectedApplicationsTable").css( {
            'display': 'none'
        })

        $("allApplicationsTable").css( {
            'display': 'none'
        })

        alert("Clicked");
    })

    $("waitlistedApplications").click(function () {
        $("waitlistedApplicationsTable").css( {
            'display': 'block'
        });

        $("acceptedApplicationsTable").css( {
            'display': 'none'
        })

        $("rejectedApplicationsTable").css( {
            'display': 'none'
        })

        $("allApplicationsTable").css( {
            'display': 'none'
        })
    })

    $("rejectedApplications").click(function () {
        $("rejectedApplicationsTable").css( {
            'display': 'block'
        });

        $("waitlistedApplicationsTable").css( {
            'display': 'none'
        })

        $("acceptedApplicationsTable").css( {
            'display': 'none'
        })

        $("allApplicationsTable").css( {
            'display': 'none'
        })
    })

    $("allApplications").click(function () {
        $("allApplicationsTable").css( {
            'display': 'block'
        });

        $("waitlistedApplicationsTable").css( {
            'display': 'none'
        })

        $("rejectedApplicationsTable").css( {
            'display': 'none'
        })

        $("acceptedApplicationsTable").css( {
            'display': 'none'
        })
    })
});

