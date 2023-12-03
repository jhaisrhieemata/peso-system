                                              Initialize matched job
                                                        |
                                                        V
                                                  $matchedJob = $row->job_name
                                                        |
                                                        V
                                                   Decision Tree Logic
                                                        |
                                                        V
                                        if (!empty($row->skill_acquired))
                                       /                                \
                                      /                                  \
                                    Yes                                  No
                                    |                                     |
                                    V                                     V
                    $row->number_of_months > 36                  $row->number_of_months > 84
                         /              \                               /                \
                        /                \                             /                  \
                       Yes               No                           Yes                  No
                        |                 |                            |                    |
                        V                 V                            V                    V
                  Check for         No Matched Job(pending)        Check for         No Matched Job(pending) 
               good communication                              good communication
                /              \                                    /          \
               /                \                                  /            \
             Yes                No                               Yes            No
              |                 |                                 |              |
              V                 V                                 V              V
        Matched Job      No Matched Job(pending)           Matched Job      No Matched Job(pending)
               
                                    
                                        ElseIf (!empty($row->special_skill))
                                        /                               \
                                       /                                  \
                                     Yes                                  No
                                     |                                     |
                                     V                                     V
                    $row->number_of_months > 36                  $row->number_of_months > 84
                         /              \                               /                \
                        /                \                             /                  \
                       Yes               No                           Yes                  No
                        |                 |                            |                    |
                        V                 V                            V                    V
                  Check for         No Matched Job(pending)        Check for         No Matched Job(pending) 
               good communication                              good communication
                /              \                                    /          \
               /                \                                  /            \
             Yes                No                               Yes            No
              |                 |                                 |              |
              V                 V                                 V              V
        Matched Job      No Matched Job(pending)           Matched Job      No Matched Job(pending) 
               
                                    